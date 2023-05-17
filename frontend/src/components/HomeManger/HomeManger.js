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
import CheckCircleIcon from '@material-ui/icons/CheckCircle';
import CheckCircleOutlineIcon from '@material-ui/icons/CheckCircleOutline';
import { getToken, isAuth, logout, getRole } from "../../services/Auth";
import Axios from "axios";
import { useHistory } from "react-router-dom";

import Snackbar from "@material-ui/core/Snackbar";
import MuiAlert from "@material-ui/lab/Alert";

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

export default function HomeManager() {
  apiBaseUrl = apiBaseUrl?.apiBaseUrl
  const history = useHistory();
  const classes = useStyles();
  const [refresh, setRefresh] = useState(false);
  // delete user (table) response OK!
  const [tickets, setTickets] = useState([]);

  useEffect(() => {
    const interval = setInterval(() => {
      if (!isAuth()) {
        logout();
        return history.push("/workshop/login/");
      } else {
        setRefresh(!refresh);
      }
    }, 5000);

    Axios.get(process.env.REACT_APP_BASE_URL + "workshop/tickets/", {
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

  const resolveRequest = (id, index) => {
    Axios.get(
      process.env.REACT_APP_BASE_URL + `workshop/tickets/resolve/${id}`,
      {
        headers: { Authorization: "Bearer " + getToken() }
      }
    )
      .then((res) => {
        if (!isAuth()) {
          logout();
          return history.push("/workshop/login/");
        }
        setRefresh(!refresh);
      })
      .catch((err) => {
        console.log(err);
      });
  };


  if (getRole() === "provider") {
    history.push("/home/provider/");
  }
  if (getRole() !== "workshop") {
    history.push("/workshop/login/");
  }



  function Alert(props) {
    return <MuiAlert elevation={6} variant="filled" {...props} />;
  }

  const [open, setOpen] = useState(false);


  return (
    <div className={classes.root}>


      <AppBar position="sticky">
        <Toolbar>
          <Typography variant="h6" className={classes.title}>
            Workshop 
          </Typography>

          <Button
            color="inherit"
            onClick={() => {
              logout();
              history.push("/workshop/login/");
            }}
          >
            Log out
          </Button>
        </Toolbar>
      </AppBar>

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
                  Request has been resolved successfully
                </Alert>
              </Snackbar>

          <Table>
            <TableHead>
              <TableRow>
                <TableCell align="center">Id</TableCell>
                <TableCell align="center">Driver</TableCell>
                <TableCell align="center">Provider</TableCell>
                <TableCell align="center">Reason</TableCell>
                <TableCell align="center">Price</TableCell>
                <TableCell align="center">Resolved</TableCell>
              </TableRow>
            </TableHead>
            <TableBody>
              {tickets.map((row, index) => (
                <TableRow key={row.id}>
                  <TableCell component="th" scope="row" align="center">
                    {row.id}
                  </TableCell>
                  <TableCell align="center">{row.driver}</TableCell>
                  <TableCell align="center">{row.provider}</TableCell>
                  <TableCell align="center">{row.reason}</TableCell>
                  <TableCell align="center">{row.price}</TableCell>
                  {row.resolved == true ? (
                    <TableCell
                      align="center"
                    >
                      {" "}
                      <CheckCircleIcon style={{ color: "blue" }} />
                    </TableCell>
                  ) : (
                    <TableCell 
                      align="center"
                      onClick={() => resolveRequest(row.id, index)}
                      style={{cursor:"pointer"}}
                    > 
                      <CheckCircleOutlineIcon />
                    </TableCell>
                  )}

                </TableRow>
              ))}
            </TableBody>
          </Table>

    </div>
  );
}
