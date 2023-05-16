import React, { useState, useEffect } from "react";
import { makeStyles } from "@material-ui/core/styles";
import AppBar from "@material-ui/core/AppBar";
import Toolbar from "@material-ui/core/Toolbar";
import Typography from "@material-ui/core/Typography";
import Table from "@material-ui/core/Table";
import TableBody from "@material-ui/core/TableBody";
import TableCell from "@material-ui/core/TableCell";
import TableHead from "@material-ui/core/TableHead";
import TableRow from "@material-ui/core/TableRow";
import Button from "@material-ui/core/Button";
import apiBaseUrl from "../../config.json";
import CheckIcon from "@material-ui/icons/Check";
import DeleteIcon from "@material-ui/icons/Delete";
import { getToken, isAuth, logout, getRole } from "../../services/Auth";
import Axios from "axios";
import { useHistory } from "react-router-dom";

import Grid from "@material-ui/core/Grid";
import Snackbar from "@material-ui/core/Snackbar";
import MuiAlert from "@material-ui/lab/Alert";
import Avatar from "@material-ui/core/Avatar";
import TextField from "@material-ui/core/TextField";
import { Redirect } from "react-router-dom";
import LockOutlinedIcon from "@material-ui/icons/LockOutlined";
import Container from "@material-ui/core/Container";
import InputLabel from "@material-ui/core/InputLabel";
import FormControl from "@material-ui/core/FormControl";
import Select from "@material-ui/core/Select";
import Input from "@material-ui/core/Input";
import MenuItem from "@material-ui/core/MenuItem";
import Header from "../Header/Header";
import Footer from "../Footer/Footer";
import CircularProgress from "@material-ui/core/CircularProgress";
import { useFormik } from "formik"

const useStyles = makeStyles((theme) => ({
  root: {
    flexGrow: 1
  },
  menuButton: {
    marginRight: theme.spacing(2)
  },
  title: {
    flexGrow: 1
  }
}));

export default function HomeAdmin() {
  apiBaseUrl = apiBaseUrl?.apiBaseUrl
  const history = useHistory();
  const classes = useStyles();
  const [refresh, setRefresh] = useState(false);
  // delete user (table) response OK!
  const [tickets, setTickets] = useState([]);
  const [component, setComponent] = useState(0);


  const approveUser = (id, index) => {
    Axios.get(
      process.env.REACT_APP_BASE_URL + "provider/tickets",
      {
        headers: { Authorization: "Bearer " + getToken() }
      }
    )
      .then((res) => {
        if (!isAuth()) {
          logout();
          return history.push("/provider/login/");
        }
        setRefresh(!refresh);
      })
      .catch((err) => {
        console.log(err);
      });
  };

  const removeUser = (id, index) => {
    Axios.get(
      process.env.REACT_APP_BASE_URL + "provider/tickets/remove/" + id.toString(),

      {
        headers: { Authorization: "Bearer " + getToken() }
      }
    )
      .then((res) => {
        if (!isAuth()) {
          logout();
          return history.push("/provider/login/");
        }
        setRefresh(!refresh);
      })
      .catch((err) => {
        console.log(err);
      });
  };

  useEffect(() => {
    const interval = setInterval(() => {
      if (!isAuth()) {
        logout();
        return history.push("/provider/login/");
      } else {
        setRefresh(!refresh);
      }
    }, 5000);

    Axios.get(process.env.REACT_APP_BASE_URL + "provider/tickets/", {
      headers: { Authorization: "Bearer " + getToken() }
    }).then((res) => {
      if (res.data.tickets) {
        setTickets(res.data.tickets);
      } else {
      }
    });
    console.log("loading...");
    return () => clearInterval(interval);
  }, [refresh, history]);

  if (getRole() === "workshop") {
    history.push("/home/workshop/");
  }
  if (getRole() !== "provider") {
    history.push("/provider/login/");
  }





  function Alert(props) {
    return <MuiAlert elevation={6} variant="filled" {...props} />;
  }

  const [drivers, setDrivers] = useState([])
  const [workshops, setWorkshops] = useState([])
  const [reasons, setReasons] = useState([])
  const [price, setPrice] = useState([])
  const [open, setOpen] = useState(false);

  const formik = useFormik({
    initialValues: {
      workshop: 0,
      driver: 0,
      reason: 0
    },
    onSubmit: values => {
      Axios.post(
        process.env.REACT_APP_BASE_URL + "provider/tickets/create",
        {
          driver_id: values.driver,
          workshop_id: values.workshop,
          reason_id: values.reason,
        },
        {
          headers: { Authorization: "Bearer " + getToken() }
        }
      )
        .then((res) => {
          if (!isAuth()) {
            logout();
            return history.push("/provider/login/");
          }
          formik.setFieldValue("reason", 0);
          formik.setFieldValue("driver", 0);
          formik.setFieldValue("workshop", 0);
          setOpen(true)
          setRefresh(!refresh);
        })
        .catch((err) => {
          console.log(err);
        });
    }
  })


  useEffect(() => {
    Axios.get(
      process.env.REACT_APP_BASE_URL + "provider/reasons",
      {
        headers: { Authorization: "Bearer " + getToken() }
      }
    )
      .then((res) => {
        if (!isAuth()) {
          logout();
          return history.push("/provider/login/");
        }
        setReasons(res.data.reasons)
      })
      .catch((err) => {
        console.log(err);
      });
  }, [])

  useEffect(() => {
    Axios.get(
      process.env.REACT_APP_BASE_URL + "provider/drivers",
      {
        headers: { Authorization: "Bearer " + getToken() }
      }
    )
      .then((res) => {
        if (!isAuth()) {
          logout();
          return history.push("/provider/login/");
        }
        setDrivers(res.data.drivers)
      })
      .catch((err) => {
        console.log(err);
      });
  }, [])

  useEffect(() => {
    Axios.get(
      process.env.REACT_APP_BASE_URL + "provider/workshops",
      {
        headers: { Authorization: "Bearer " + getToken() }
      }
    )
      .then((res) => {
        if (!isAuth()) {
          logout();
          return history.push("/provider/login/");
        }
        setWorkshops(res.data.workshops)
      })
      .catch((err) => {
        console.log(err);
      });
  }, [])




  console.log(formik.values)




  return (
    <div className={classes.root}>


      <AppBar position="sticky">
        <Toolbar>
          <Typography variant="h6" className={classes.title}>
            Provider | <Button variant="contained" onClick={() => { setComponent(prev => !prev) }}>
              {
                !component ? (
                  "Create new Request"
                ) : (
                  "List All Requests"
                )
              }
            </Button>
          </Typography>

          <Button
            color="inherit"
            onClick={() => {
              logout();
              history.push("/provider/login/");
            }}
          >
            Log out
          </Button>
        </Toolbar>
      </AppBar>

      {
        component ?
          (<form style={{marginTop:"20px"}} className={classes.form} noValidate>
            <Grid container spacing={2} justifyContent="center">
              <Snackbar
                open={open}
                anchorOrigin={{ vertical: "top", horizontal: "center" }}
                autoHideDuration={6000}
                onClose={() => {
                  setOpen(false);
                }}
              >
                <Alert
                  onClose={() => {
                    setOpen(false);
                  }}
                  severity="success"
                >
                  New Item added successfully!
                </Alert>
              </Snackbar>

              <Grid item xs={8}>
                <FormControl className={classes.formControl} fullWidth>
                  <InputLabel id="workshop-label">Workshop</InputLabel>
                  <Select
                    labelId="workshop"
                    id="workshop"
                    name="workshop"
                    value={formik.values.workshop}
                    onChange={(e) => {
                      formik.setFieldValue("workshop", e.target.value)
                    }}
                  >
                    {
                      workshops.map(workshop => (
                        <MenuItem key={workshop.id} value={workshop.id}>
                          {workshop.name}
                        </MenuItem>
                      ))
                    }
                  </Select>
                </FormControl>
              </Grid>

              <Grid item xs={8}>
                <FormControl className={classes.formControl} fullWidth>
                  <InputLabel id="reason-label">Reason</InputLabel>
                  <Select
                    labelId="reasonselect"
                    id="reason"
                    name="reason"
                    value={formik.values.reason}
                    onChange={(e) => {
                      formik.setFieldValue("reason", e.target.value)
                    }}
                  >
                    {
                      reasons.map(reason => (
                        <MenuItem key={reason.id} value={reason.id}>
                          {reason.description + " | " + reason.price}
                        </MenuItem>
                      ))
                    }
                  </Select>
                </FormControl>
              </Grid>

              <Grid item xs={8}>
                <FormControl className={classes.formControl} fullWidth>
                  <InputLabel id="driver-label">Driver</InputLabel>
                  <Select
                    labelId="driverselect"
                    id="driver"
                    name="driver"
                    value={formik.values.driver}
                    onChange={(e) => {
                      formik.setFieldValue("driver", e.target.value)
                    }}
                  >
                    {
                      drivers.map(driver => (
                        <MenuItem key={driver.id} value={driver.id}>
                          {driver.name}
                        </MenuItem>
                      ))
                    }
                  </Select>
                </FormControl>
              </Grid>
              <Grid item xs={8}>
                <Button
                  type="submit"
                  onClick={formik.handleSubmit}
                  fullWidth
                  variant="contained"
                  color="primary"
                  className={classes.submit}
                >
                  Add new Request
                </Button>

              </Grid>
            </Grid>
          </form>) :


          (<Table>
            <TableHead>
              <TableRow>
                <TableCell align="center">Id</TableCell>
                <TableCell align="center">Driver</TableCell>
                <TableCell align="center">Workshop</TableCell>
                <TableCell align="center">Reason</TableCell>
                <TableCell align="center">Price</TableCell>
                <TableCell align="center">Resolved</TableCell>
                <TableCell align="center">Delete</TableCell>
              </TableRow>
            </TableHead>
            <TableBody>
              {tickets.map((row, index) => (
                <TableRow key={row.id}>
                  <TableCell component="th" scope="row" align="center">
                    {row.id}
                  </TableCell>
                  <TableCell align="center">{row.driver}</TableCell>
                  <TableCell align="center">{row.workshop}</TableCell>
                  <TableCell align="center">{row.reason}</TableCell>
                  <TableCell align="center">{row.price}</TableCell>
                  {row.resolved == true ? (
                    <TableCell
                      align="center"
                      onClick={() => approveUser(row.id, index)}
                    >
                      {" "}
                      <CheckIcon style={{ color: "blue" }} />
                    </TableCell>
                  ) : (
                    <TableCell align="center"> </TableCell>
                  )}

                  {row.resolved == true ? (
                    <TableCell
                      align="center"
                    >
                      <DeleteIcon />
                    </TableCell>
                  ) : (
                    <TableCell
                      align="center"
                      onClick={() => removeUser(row.id, index)}
                    >
                      <DeleteIcon style={{ color: "blue", cursor: "pointer" }} />
                    </TableCell>
                  )}


                </TableRow>
              ))}
            </TableBody>
          </Table>)

      }

    </div>
  );
}
