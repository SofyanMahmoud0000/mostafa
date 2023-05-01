<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>EPLMRS</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/style.css") }}" media="screen" />
        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/print.css") }}" media="print" />
        <script src="{{ asset("vendor/scribe/js/all.js") }}"></script>

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/highlight-darcula.css") }}" media="" />
        <script src="{{ asset("vendor/scribe/js/highlight.pack.js") }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</head>

<body class="" data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">
<a href="#" id="nav-button">
      <span>
        NAV
            <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="-image" class=""/>
      </span>
</a>
<div class="tocify-wrapper">
                <div class="lang-selector">
                            <a href="#" data-language-name="bash">bash</a>
                            <a href="#" data-language-name="javascript">javascript</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI (Swagger) spec</a></li>
                            <li><a href='http://github.com/knuckleswtf/scribe'>Documentation powered by Scribe ✍</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: May 1 2023</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
<script>
    var baseUrl = "http://localhost:8000";
</script>
<script src="{{ asset("vendor/scribe/js/tryitout-2.7.10.js") }}"></script>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost:8000</code></pre><h1>Authenticating requests</h1>
<p>This API is authenticated by sending an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting your dashboard and clicking <b>Generate API token</b>.</p><h1>Adminstator</h1>
<h2>api/admin/login</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/admin/login?username=omnis&amp;password=deleniti" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/admin/login"
);

let params = {
    "username": "omnis",
    "password": "deleniti",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "token": "token_value",
 "token_type": "token_type
}</code></pre>
<div id="execution-results-POSTapi-admin-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-admin-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-admin-login"></code></pre>
</div>
<div id="execution-error-POSTapi-admin-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-admin-login"></code></pre>
</div>
<form id="form-POSTapi-admin-login" data-method="POST" data-path="api/admin/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-admin-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-admin-login" onclick="tryItOut('POSTapi-admin-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-admin-login" onclick="cancelTryOut('POSTapi-admin-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-admin-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/admin/login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>username</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="username" data-endpoint="POSTapi-admin-login" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-admin-login" data-component="query" required  hidden>
<br>

</p>
</form>
<h2>api/admin/users</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/admin/users" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/admin/users"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "users": [
        {
            "id": 1,
            "first_name": "Sofyan",
            "last_name": "Mahmoud",
            "username": "sofyanmahmoud0000",
            "email": "sofyan1020@gmail.com",
            "email_verified_at": null,
            "birthday": "21-02-1998",
            "gender": "male",
            "city": "Dokki",
            "address": null,
            "role": "fan",
            "created_at": "2020-12-30T08:58:50.000000Z",
            "updated_at": "2020-12-30T08:58:50.000000Z"
        }
    ]
}</code></pre>
<div id="execution-results-GETapi-admin-users" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-admin-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-users"></code></pre>
</div>
<div id="execution-error-GETapi-admin-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-users"></code></pre>
</div>
<form id="form-GETapi-admin-users" data-method="GET" data-path="api/admin/users" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-admin-users" onclick="tryItOut('GETapi-admin-users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-admin-users" onclick="cancelTryOut('GETapi-admin-users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-admin-users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/admin/users</code></b>
</p>
<p>
<label id="auth-GETapi-admin-users" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-admin-users" data-component="header"></label>
</p>
</form>
<h2>api/admin/remove/user/{id}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/admin/remove/user/quo" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/admin/remove/user/quo"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "The user have been deleted successfully"
}</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">
{
  "message": "This user doesn\'t exist"   
}</code></pre>
<div id="execution-results-GETapi-admin-remove-user--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-admin-remove-user--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-remove-user--id-"></code></pre>
</div>
<div id="execution-error-GETapi-admin-remove-user--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-remove-user--id-"></code></pre>
</div>
<form id="form-GETapi-admin-remove-user--id-" data-method="GET" data-path="api/admin/remove/user/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-remove-user--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-admin-remove-user--id-" onclick="tryItOut('GETapi-admin-remove-user--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-admin-remove-user--id-" onclick="cancelTryOut('GETapi-admin-remove-user--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-admin-remove-user--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/admin/remove/user/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-admin-remove-user--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-admin-remove-user--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-admin-remove-user--id-" data-component="url" required  hidden>
<br>

</p>
</form>
<h2>api/admin/verify/user/{id}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/admin/verify/user/nihil" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/admin/verify/user/nihil"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "The user have been verified successfully"
}</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "This user doesn't exist"
}</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "This user is already verified"
}</code></pre>
<div id="execution-results-GETapi-admin-verify-user--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-admin-verify-user--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-verify-user--id-"></code></pre>
</div>
<div id="execution-error-GETapi-admin-verify-user--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-verify-user--id-"></code></pre>
</div>
<form id="form-GETapi-admin-verify-user--id-" data-method="GET" data-path="api/admin/verify/user/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-verify-user--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-admin-verify-user--id-" onclick="tryItOut('GETapi-admin-verify-user--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-admin-verify-user--id-" onclick="cancelTryOut('GETapi-admin-verify-user--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-admin-verify-user--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/admin/verify/user/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-admin-verify-user--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-admin-verify-user--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-admin-verify-user--id-" data-component="url" required  hidden>
<br>

</p>
</form><h1>Endpoints</h1>
<h2>Invoke the controller method.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/home" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/home"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset="UTF-8" /&gt;
        &lt;meta http-equiv="refresh" content="0;url='/api'" /&gt;

        &lt;title&gt;Redirecting to /api&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href="/api"&gt;/api&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
<div id="execution-results-GETapi-home" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-home"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-home"></code></pre>
</div>
<div id="execution-error-GETapi-home" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-home"></code></pre>
</div>
<form id="form-GETapi-home" data-method="GET" data-path="api/home" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-home', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-home" onclick="tryItOut('GETapi-home');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-home" onclick="cancelTryOut('GETapi-home');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-home" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/home</code></b>
</p>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/home</code></b>
</p>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/home</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/home</code></b>
</p>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/home</code></b>
</p>
<p>
<small class="badge badge-grey">OPTIONS</small>
 <b><code>api/home</code></b>
</p>
</form>
<h2>api</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "app_name": "Laravel"
}</code></pre>
<div id="execution-results-GETapi" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi"></code></pre>
</div>
<div id="execution-error-GETapi" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi"></code></pre>
</div>
<form id="form-GETapi" data-method="GET" data-path="api" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi" onclick="tryItOut('GETapi');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi" onclick="cancelTryOut('GETapi');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api</code></b>
</p>
</form>
<h2>api/logout</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/logout" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/logout"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "You have looged out now"
}</code></pre>
<div id="execution-results-GETapi-logout" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-logout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-logout"></code></pre>
</div>
<div id="execution-error-GETapi-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-logout"></code></pre>
</div>
<form id="form-GETapi-logout" data-method="GET" data-path="api/logout" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-logout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-logout" onclick="tryItOut('GETapi-logout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-logout" onclick="cancelTryOut('GETapi-logout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-logout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/logout</code></b>
</p>
<p>
<label id="auth-GETapi-logout" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-logout" data-component="header"></label>
</p>
</form><h1>Fan</h1>
<h2>api/fan/informations</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/fan/informations" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/fan/informations"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "user": {
        "id": 11,
        "first_name": "new name",
        "last_name": "new nam",
        "username": "sofyanmahmoud0000",
        "email": "sofyan1020@gmail.com",
        "email_verified_at": null,
        "birthday": "12-12-2000",
        "gender": "male",
        "city": "Zamalek",
        "address": null,
        "role": "fan",
        "created_at": "2020-12-31T04:07:12.000000Z",
        "updated_at": "2020-12-31T04:12:47.000000Z"
    }
}</code></pre>
<div id="execution-results-GETapi-fan-informations" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-fan-informations"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-fan-informations"></code></pre>
</div>
<div id="execution-error-GETapi-fan-informations" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-fan-informations"></code></pre>
</div>
<form id="form-GETapi-fan-informations" data-method="GET" data-path="api/fan/informations" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-fan-informations', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-fan-informations" onclick="tryItOut('GETapi-fan-informations');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-fan-informations" onclick="cancelTryOut('GETapi-fan-informations');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-fan-informations" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/fan/informations</code></b>
</p>
<p>
<label id="auth-GETapi-fan-informations" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-fan-informations" data-component="header"></label>
</p>
</form>
<h2>api/fan/update</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/fan/update?first_name=deleniti&amp;last_name=sequi&amp;birthday=molestias&amp;gender=impedit&amp;city=ea&amp;address=maiores" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/fan/update"
);

let params = {
    "first_name": "deleniti",
    "last_name": "sequi",
    "birthday": "molestias",
    "gender": "impedit",
    "city": "ea",
    "address": "maiores",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "The date have been updated successfully"
}</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": {
        "first_name": [
            "The first name field is required."
        ],
        "last_name": [
            "The last name field is required."
        ],
        "birthday": [
            "The birthday field is required."
        ],
        "gender": [
            "The gender field is required."
        ],
        "city": [
            "The city field is required."
        ]
    }
}</code></pre>
<div id="execution-results-POSTapi-fan-update" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-fan-update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-fan-update"></code></pre>
</div>
<div id="execution-error-POSTapi-fan-update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-fan-update"></code></pre>
</div>
<form id="form-POSTapi-fan-update" data-method="POST" data-path="api/fan/update" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-fan-update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-fan-update" onclick="tryItOut('POSTapi-fan-update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-fan-update" onclick="cancelTryOut('POSTapi-fan-update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-fan-update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/fan/update</code></b>
</p>
<p>
<label id="auth-POSTapi-fan-update" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-fan-update" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-fan-update" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-fan-update" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>birthday</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="birthday" data-endpoint="POSTapi-fan-update" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="gender" data-endpoint="POSTapi-fan-update" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>city</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="city" data-endpoint="POSTapi-fan-update" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="address" data-endpoint="POSTapi-fan-update" data-component="query"  hidden>
<br>
optional
</p>
</form>
<h2>api/fan/reserve</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/fan/reserve?stadium_id=16&amp;match_id=18&amp;row=13&amp;col=14" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/fan/reserve"
);

let params = {
    "stadium_id": "16",
    "match_id": "18",
    "row": "13",
    "col": "14",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "The seat has reserved successfully"
}</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "error": "This seat is not valid"
}</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "error": "This stadium doesn't exist"
}</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "error": "This match dosen't exist in this stadium"
}</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "error": "This seat is already reserved"
}</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "error": "You have already reserved this seat"
}</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": {
        "stadium_id": [
            "The stadium id field is required."
        ],
        "match_id": [
            "The match id field is required."
        ],
        "row": [
            "The row field is required."
        ],
        "col": [
            "The col field is required."
        ]
    }
}</code></pre>
<div id="execution-results-GETapi-fan-reserve" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-fan-reserve"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-fan-reserve"></code></pre>
</div>
<div id="execution-error-GETapi-fan-reserve" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-fan-reserve"></code></pre>
</div>
<form id="form-GETapi-fan-reserve" data-method="GET" data-path="api/fan/reserve" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-fan-reserve', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-fan-reserve" onclick="tryItOut('GETapi-fan-reserve');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-fan-reserve" onclick="cancelTryOut('GETapi-fan-reserve');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-fan-reserve" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/fan/reserve</code></b>
</p>
<p>
<label id="auth-GETapi-fan-reserve" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-fan-reserve" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>stadium_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="stadium_id" data-endpoint="GETapi-fan-reserve" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>match_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="match_id" data-endpoint="GETapi-fan-reserve" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>row</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="row" data-endpoint="GETapi-fan-reserve" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>col</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="col" data-endpoint="GETapi-fan-reserve" data-component="query" required  hidden>
<br>

</p>
</form>
<h2>api/fan/cancel/reservation</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/fan/cancel/reservation?stadium_id=20&amp;match_id=1&amp;row=8&amp;col=12" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/fan/cancel/reservation"
);

let params = {
    "stadium_id": "20",
    "match_id": "1",
    "row": "8",
    "col": "12",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "The reservation has deleted successfully"
}</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "error": "This seat is not valid"
}</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "error": "This stadium doesn't exist"
}</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "error": "This match dosen't exist in this stadium"
}</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "error": "This seat is not reserved by you"
}</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": {
        "stadium_id": [
            "The stadium id field is required."
        ],
        "match_id": [
            "The match id field is required."
        ],
        "row": [
            "The row field is required."
        ],
        "col": [
            "The col field is required."
        ]
    }
}</code></pre>
<div id="execution-results-GETapi-fan-cancel-reservation" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-fan-cancel-reservation"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-fan-cancel-reservation"></code></pre>
</div>
<div id="execution-error-GETapi-fan-cancel-reservation" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-fan-cancel-reservation"></code></pre>
</div>
<form id="form-GETapi-fan-cancel-reservation" data-method="GET" data-path="api/fan/cancel/reservation" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-fan-cancel-reservation', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-fan-cancel-reservation" onclick="tryItOut('GETapi-fan-cancel-reservation');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-fan-cancel-reservation" onclick="cancelTryOut('GETapi-fan-cancel-reservation');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-fan-cancel-reservation" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/fan/cancel/reservation</code></b>
</p>
<p>
<label id="auth-GETapi-fan-cancel-reservation" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-fan-cancel-reservation" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>stadium_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="stadium_id" data-endpoint="GETapi-fan-cancel-reservation" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>match_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="match_id" data-endpoint="GETapi-fan-cancel-reservation" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>row</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="row" data-endpoint="GETapi-fan-cancel-reservation" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>col</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="col" data-endpoint="GETapi-fan-cancel-reservation" data-component="query" required  hidden>
<br>

</p>
</form><h1>Manager</h1>
<h2>api/manager/stadiums</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/manager/stadiums" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/manager/stadiums"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "stadiums": [
        {
            "id": 1,
            "name": "Blick and Sons",
            "rows": "9",
            "seats_per_row": "5",
            "created_at": "2020-12-31T03:00:35.000000Z",
            "updated_at": "2020-12-31T03:00:35.000000Z"
        },
        {
            "id": 2,
            "name": "Klocko LLC",
            "rows": "7",
            "seats_per_row": "9",
            "created_at": "2020-12-31T03:00:35.000000Z",
            "updated_at": "2020-12-31T03:00:35.000000Z"
        },
        {
            "id": 3,
            "name": "Tremblay-Koelpin",
            "rows": "6",
            "seats_per_row": "10",
            "created_at": "2020-12-31T03:00:35.000000Z",
            "updated_at": "2020-12-31T03:00:35.000000Z"
        },
        {
            "id": 4,
            "name": "Feil-Streich",
            "rows": "10",
            "seats_per_row": "10",
            "created_at": "2020-12-31T03:00:35.000000Z",
            "updated_at": "2020-12-31T03:00:35.000000Z"
        },
        {
            "id": 5,
            "name": "Ullrich-Pfannerstill",
            "rows": "7",
            "seats_per_row": "6",
            "created_at": "2020-12-31T03:00:36.000000Z",
            "updated_at": "2020-12-31T03:00:36.000000Z"
        }
    ]
}</code></pre>
<div id="execution-results-GETapi-manager-stadiums" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-manager-stadiums"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-manager-stadiums"></code></pre>
</div>
<div id="execution-error-GETapi-manager-stadiums" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-manager-stadiums"></code></pre>
</div>
<form id="form-GETapi-manager-stadiums" data-method="GET" data-path="api/manager/stadiums" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-manager-stadiums', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-manager-stadiums" onclick="tryItOut('GETapi-manager-stadiums');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-manager-stadiums" onclick="cancelTryOut('GETapi-manager-stadiums');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-manager-stadiums" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/manager/stadiums</code></b>
</p>
<p>
<label id="auth-GETapi-manager-stadiums" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-manager-stadiums" data-component="header"></label>
</p>
</form>
<h2>api/manager/teams</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/manager/teams" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/manager/teams"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "teams": [
        {
            "id": 1,
            "name": "Barton, Streich and Mayer",
            "created_at": "2020-12-31T03:00:34.000000Z",
            "updated_at": "2020-12-31T03:00:34.000000Z"
        },
        {
            "id": 2,
            "name": "Cormier, Reynolds and Langosh",
            "created_at": "2020-12-31T03:00:34.000000Z",
            "updated_at": "2020-12-31T03:00:34.000000Z"
        },
        {
            "id": 3,
            "name": "Hermann-Sauer",
            "created_at": "2020-12-31T03:00:34.000000Z",
            "updated_at": "2020-12-31T03:00:34.000000Z"
        },
        {
            "id": 4,
            "name": "Thompson-Rutherford",
            "created_at": "2020-12-31T03:00:34.000000Z",
            "updated_at": "2020-12-31T03:00:34.000000Z"
        },
        {
            "id": 5,
            "name": "Schulist-Keebler",
            "created_at": "2020-12-31T03:00:34.000000Z",
            "updated_at": "2020-12-31T03:00:34.000000Z"
        },
        {
            "id": 6,
            "name": "Hudson-Towne",
            "created_at": "2020-12-31T03:00:34.000000Z",
            "updated_at": "2020-12-31T03:00:34.000000Z"
        },
        {
            "id": 7,
            "name": "Wiza, Rice and Lehner",
            "created_at": "2020-12-31T03:00:34.000000Z",
            "updated_at": "2020-12-31T03:00:34.000000Z"
        },
        {
            "id": 8,
            "name": "Cole-Bechtelar",
            "created_at": "2020-12-31T03:00:34.000000Z",
            "updated_at": "2020-12-31T03:00:34.000000Z"
        },
        {
            "id": 9,
            "name": "Kohler PLC",
            "created_at": "2020-12-31T03:00:34.000000Z",
            "updated_at": "2020-12-31T03:00:34.000000Z"
        },
        {
            "id": 10,
            "name": "Kerluke, Thiel and Bergnaum",
            "created_at": "2020-12-31T03:00:35.000000Z",
            "updated_at": "2020-12-31T03:00:35.000000Z"
        },
        {
            "id": 11,
            "name": "Barton, Langworth and Skiles",
            "created_at": "2020-12-31T03:00:35.000000Z",
            "updated_at": "2020-12-31T03:00:35.000000Z"
        },
        {
            "id": 12,
            "name": "Kohler-Schaefer",
            "created_at": "2020-12-31T03:00:35.000000Z",
            "updated_at": "2020-12-31T03:00:35.000000Z"
        },
        {
            "id": 13,
            "name": "Wolff, Luettgen and Lueilwitz",
            "created_at": "2020-12-31T03:00:35.000000Z",
            "updated_at": "2020-12-31T03:00:35.000000Z"
        },
        {
            "id": 14,
            "name": "Nikolaus, Runte and Smitham",
            "created_at": "2020-12-31T03:00:35.000000Z",
            "updated_at": "2020-12-31T03:00:35.000000Z"
        },
        {
            "id": 15,
            "name": "Parker, Walker and Pfannerstill",
            "created_at": "2020-12-31T03:00:35.000000Z",
            "updated_at": "2020-12-31T03:00:35.000000Z"
        },
        {
            "id": 16,
            "name": "Senger, Yost and O'Kon",
            "created_at": "2020-12-31T03:00:35.000000Z",
            "updated_at": "2020-12-31T03:00:35.000000Z"
        },
        {
            "id": 17,
            "name": "Donnelly, Leffler and Casper",
            "created_at": "2020-12-31T03:00:35.000000Z",
            "updated_at": "2020-12-31T03:00:35.000000Z"
        },
        {
            "id": 18,
            "name": "Kiehn-Grady",
            "created_at": "2020-12-31T03:00:35.000000Z",
            "updated_at": "2020-12-31T03:00:35.000000Z"
        }
    ]
}</code></pre>
<div id="execution-results-GETapi-manager-teams" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-manager-teams"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-manager-teams"></code></pre>
</div>
<div id="execution-error-GETapi-manager-teams" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-manager-teams"></code></pre>
</div>
<form id="form-GETapi-manager-teams" data-method="GET" data-path="api/manager/teams" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-manager-teams', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-manager-teams" onclick="tryItOut('GETapi-manager-teams');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-manager-teams" onclick="cancelTryOut('GETapi-manager-teams');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-manager-teams" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/manager/teams</code></b>
</p>
<p>
<label id="auth-GETapi-manager-teams" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-manager-teams" data-component="header"></label>
</p>
</form>
<h2>api/manager/add/match</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/manager/add/match?home_team_id=5&amp;away_team_id=14&amp;stadium_id=5&amp;date_time=exercitationem&amp;main_referee=qui&amp;linesmen_1=dignissimos&amp;linesmen_2=modi" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/manager/add/match"
);

let params = {
    "home_team_id": "5",
    "away_team_id": "14",
    "stadium_id": "5",
    "date_time": "exercitationem",
    "main_referee": "qui",
    "linesmen_1": "dignissimos",
    "linesmen_2": "modi",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "The match has been added successfully"
}</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "error": "The home team can't be equal the away team"
}</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": {
        "home_team_id": [
            "The home team id field is required."
        ],
        "away_team_id": [
            "The away team id field is required."
        ],
        "stadium_id": [
            "The stadium id field is required."
        ],
        "date_time": [
            "The date time field is required."
        ],
        "main_referee": [
            "The main referee field is required."
        ],
        "linesmen_1": [
            "The linesmen 1 field is required."
        ],
        "linesmen_2": [
            "The linesmen 2 field is required."
        ]
    }
}</code></pre>
<div id="execution-results-POSTapi-manager-add-match" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-manager-add-match"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-manager-add-match"></code></pre>
</div>
<div id="execution-error-POSTapi-manager-add-match" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-manager-add-match"></code></pre>
</div>
<form id="form-POSTapi-manager-add-match" data-method="POST" data-path="api/manager/add/match" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-manager-add-match', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-manager-add-match" onclick="tryItOut('POSTapi-manager-add-match');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-manager-add-match" onclick="cancelTryOut('POSTapi-manager-add-match');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-manager-add-match" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/manager/add/match</code></b>
</p>
<p>
<label id="auth-POSTapi-manager-add-match" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-manager-add-match" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>home_team_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="home_team_id" data-endpoint="POSTapi-manager-add-match" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>away_team_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="away_team_id" data-endpoint="POSTapi-manager-add-match" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>stadium_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="stadium_id" data-endpoint="POSTapi-manager-add-match" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>date_time</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="date_time" data-endpoint="POSTapi-manager-add-match" data-component="query" required  hidden>
<br>
date
</p>
<p>
<b><code>main_referee</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="main_referee" data-endpoint="POSTapi-manager-add-match" data-component="query" required  hidden>
<br>
The name of the main referee
</p>
<p>
<b><code>linesmen_1</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="linesmen_1" data-endpoint="POSTapi-manager-add-match" data-component="query" required  hidden>
<br>
The name of the first linesmen
</p>
<p>
<b><code>linesmen_2</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="linesmen_2" data-endpoint="POSTapi-manager-add-match" data-component="query" required  hidden>
<br>
The name of the second linesmen
</p>
</form>
<h2>api/manager/update/match/{id}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/manager/update/match/quos?home_team_id=9&amp;away_team_id=8&amp;stadium_id=13&amp;date_time=et&amp;main_referee=itaque&amp;linesmen_1=laudantium&amp;linesmen_2=est" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/manager/update/match/quos"
);

let params = {
    "home_team_id": "9",
    "away_team_id": "8",
    "stadium_id": "13",
    "date_time": "et",
    "main_referee": "itaque",
    "linesmen_1": "laudantium",
    "linesmen_2": "est",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "The match has been updated successfully"
}</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "error": "The home team can't be equal the away team"
}</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "error": "This match doesn't exist"
}</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": {
        "home_team_id": [
            "The home team id field is required."
        ],
        "away_team_id": [
            "The away team id field is required."
        ],
        "stadium_id": [
            "The stadium id field is required."
        ],
        "date_time": [
            "The date time field is required."
        ],
        "main_referee": [
            "The main referee field is required."
        ],
        "linesmen_1": [
            "The linesmen 1 field is required."
        ],
        "linesmen_2": [
            "The linesmen 2 field is required."
        ]
    }
}</code></pre>
<div id="execution-results-POSTapi-manager-update-match--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-manager-update-match--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-manager-update-match--id-"></code></pre>
</div>
<div id="execution-error-POSTapi-manager-update-match--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-manager-update-match--id-"></code></pre>
</div>
<form id="form-POSTapi-manager-update-match--id-" data-method="POST" data-path="api/manager/update/match/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-manager-update-match--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-manager-update-match--id-" onclick="tryItOut('POSTapi-manager-update-match--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-manager-update-match--id-" onclick="cancelTryOut('POSTapi-manager-update-match--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-manager-update-match--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/manager/update/match/{id}</code></b>
</p>
<p>
<label id="auth-POSTapi-manager-update-match--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-manager-update-match--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTapi-manager-update-match--id-" data-component="url" required  hidden>
<br>
The id of the match to be updated
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>home_team_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="home_team_id" data-endpoint="POSTapi-manager-update-match--id-" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>away_team_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="away_team_id" data-endpoint="POSTapi-manager-update-match--id-" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>stadium_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="stadium_id" data-endpoint="POSTapi-manager-update-match--id-" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>date_time</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="date_time" data-endpoint="POSTapi-manager-update-match--id-" data-component="query" required  hidden>
<br>
date
</p>
<p>
<b><code>main_referee</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="main_referee" data-endpoint="POSTapi-manager-update-match--id-" data-component="query" required  hidden>
<br>
The name of the main referee
</p>
<p>
<b><code>linesmen_1</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="linesmen_1" data-endpoint="POSTapi-manager-update-match--id-" data-component="query" required  hidden>
<br>
The name of the first linesmen
</p>
<p>
<b><code>linesmen_2</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="linesmen_2" data-endpoint="POSTapi-manager-update-match--id-" data-component="query" required  hidden>
<br>
The name of the second linesmen
</p>
</form>
<h2>api/manager/add/stadium</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/manager/add/stadium?name=qui&amp;rows=3&amp;seats_per_row=1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/manager/add/stadium"
);

let params = {
    "name": "qui",
    "rows": "3",
    "seats_per_row": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "The stadium has been added successfully"
}</code></pre>
<div id="execution-results-POSTapi-manager-add-stadium" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-manager-add-stadium"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-manager-add-stadium"></code></pre>
</div>
<div id="execution-error-POSTapi-manager-add-stadium" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-manager-add-stadium"></code></pre>
</div>
<form id="form-POSTapi-manager-add-stadium" data-method="POST" data-path="api/manager/add/stadium" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-manager-add-stadium', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-manager-add-stadium" onclick="tryItOut('POSTapi-manager-add-stadium');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-manager-add-stadium" onclick="cancelTryOut('POSTapi-manager-add-stadium');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-manager-add-stadium" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/manager/add/stadium</code></b>
</p>
<p>
<label id="auth-POSTapi-manager-add-stadium" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-manager-add-stadium" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-manager-add-stadium" data-component="query" required  hidden>
<br>
The name of the stadium
</p>
<p>
<b><code>rows</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="rows" data-endpoint="POSTapi-manager-add-stadium" data-component="query" required  hidden>
<br>
The number of rows in the stadium
</p>
<p>
<b><code>seats_per_row</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="seats_per_row" data-endpoint="POSTapi-manager-add-stadium" data-component="query" required  hidden>
<br>
The number of seats in each row
</p>
</form><h1>Shared</h1>
<h2>api/matches</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/matches" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/matches"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
   "matches": [
       {
           "id": 1,
           "home_team_id": "7",
           "away_team_id": "12",
           "stadium_id": "3",
           "date_time": "2020-04-19",
           "main_referee": "River Cole PhD",
           "linesmen_1": "Rachel Dickinson",
           "linesmen_2": "Ashleigh Fritsch",
           "created_at": "2020-12-31T03:00:36.000000Z",
           "updated_at": "2020-12-31T03:00:36.000000Z",
           "stadium": {
               "id": 3,
               "name": "Tremblay-Koelpin",
               "rows": "2",
               "seats_per_row": "4",
               "created_at": "2020-12-31T03:00:35.000000Z",
               "updated_at": "2020-12-31T03:00:35.000000Z"
           },
           "away_team": {
               "id": 12,
               "name": "Kohler-Schaefer",
               "created_at": "2020-12-31T03:00:35.000000Z",
               "updated_at": "2020-12-31T03:00:35.000000Z"
           },
           "home_team": {
               "id": 7,
               "name": "Wiza, Rice and Lehner",
               "created_at": "2020-12-31T03:00:34.000000Z",
               "updated_at": "2020-12-31T03:00:34.000000Z"
           },
           "seats": [
               [
                   1,
                   1,
                   1,
                   1,
               ],
               [
                   1,
                   1,
                   0,
                   1,
               ]
           ]
       },
       {
           "id": 2,
           "home_team_id": "11",
           "away_team_id": "11",
           "stadium_id": "4",
           "date_time": "1983-03-16",
           "main_referee": "Jocelyn Hackett",
           "linesmen_1": "Clyde Reynolds",
           "linesmen_2": "Karina Gaylord",
           "created_at": "2020-12-31T03:00:36.000000Z",
           "updated_at": "2020-12-31T03:00:36.000000Z",
           "stadium": {
               "id": 4,
               "name": "Feil-Streich",
               "rows": "2",
               "seats_per_row": "3",
               "created_at": "2020-12-31T03:00:35.000000Z",
               "updated_at": "2020-12-31T03:00:35.000000Z"
           },
           "away_team": {
               "id": 11,
               "name": "Barton, Langworth and Skiles",
               "created_at": "2020-12-31T03:00:35.000000Z",
               "updated_at": "2020-12-31T03:00:35.000000Z"
           },
           "home_team": {
               "id": 11,
               "name": "Barton, Langworth and Skiles",
               "created_at": "2020-12-31T03:00:35.000000Z",
               "updated_at": "2020-12-31T03:00:35.000000Z"
           },
           "seats": [
               [
                   1,
                   1,
                   1,
               ],
               [
                   1,
                   1,
                   1,
               ]
           ]
       },
   ]
}</code></pre>
<div id="execution-results-GETapi-matches" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-matches"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-matches"></code></pre>
</div>
<div id="execution-error-GETapi-matches" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-matches"></code></pre>
</div>
<form id="form-GETapi-matches" data-method="GET" data-path="api/matches" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-matches', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-matches" onclick="tryItOut('GETapi-matches');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-matches" onclick="cancelTryOut('GETapi-matches');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-matches" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/matches</code></b>
</p>
<p>
<label id="auth-GETapi-matches" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-matches" data-component="header"></label>
</p>
</form>
<h2>api/match/{id}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/match/15" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/match/15"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "error": "This match doesn't exist"
}</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
   "match": {
       "id": 1,
       "home_team_id": "7",
       "away_team_id": "12",
       "stadium_id": "3",
       "date_time": "2020-04-19",
       "main_referee": "River Cole PhD",
       "linesmen_1": "Rachel Dickinson",
       "linesmen_2": "Ashleigh Fritsch",
       "created_at": "2020-12-31T03:00:36.000000Z",
       "updated_at": "2020-12-31T03:00:36.000000Z",
       "stadium": {
           "id": 3,
           "name": "Tremblay-Koelpin",
           "rows": "2",
           "seats_per_row": "4",
           "created_at": "2020-12-31T03:00:35.000000Z",
           "updated_at": "2020-12-31T03:00:35.000000Z"
       },
       "away_team": {
           "id": 12,
           "name": "Kohler-Schaefer",
           "created_at": "2020-12-31T03:00:35.000000Z",
           "updated_at": "2020-12-31T03:00:35.000000Z"
       },
       "home_team": {
           "id": 7,
           "name": "Wiza, Rice and Lehner",
           "created_at": "2020-12-31T03:00:34.000000Z",
           "updated_at": "2020-12-31T03:00:34.000000Z"
       },
       "seats": [
           [
               1,
               1,
               1,
               1,
           ],
           [
               1,
               1,
               0,
               1,
           ]
       ]
   }
}</code></pre>
<div id="execution-results-GETapi-match--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-match--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-match--id-"></code></pre>
</div>
<div id="execution-error-GETapi-match--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-match--id-"></code></pre>
</div>
<form id="form-GETapi-match--id-" data-method="GET" data-path="api/match/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-match--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-match--id-" onclick="tryItOut('GETapi-match--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-match--id-" onclick="cancelTryOut('GETapi-match--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-match--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/match/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-match--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-match--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-match--id-" data-component="url" required  hidden>
<br>
The id of the match to be viewed
</p>
</form><h1>Uesr</h1>
<h2>api/user/register</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/user/register?first_name=non&amp;last_name=qui&amp;username=recusandae&amp;email=aut&amp;password=porro&amp;password_confirmed=accusantium&amp;birthday=natus&amp;gender=est&amp;role=rerum&amp;city=quos&amp;address=veritatis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/user/register"
);

let params = {
    "first_name": "non",
    "last_name": "qui",
    "username": "recusandae",
    "email": "aut",
    "password": "porro",
    "password_confirmed": "accusantium",
    "birthday": "natus",
    "gender": "est",
    "role": "rerum",
    "city": "quos",
    "address": "veritatis",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "email": [
        "The email must be a valid email address."
    ],
    "password": [
        "The password must be at least 8 characters.",
        "The password confirmation does not match."
    ],
    "birthday": [
        "The birthday is not a valid date."
    ],
    "role": [
        "The selected role is invalid."
    ]
}</code></pre>
<div id="execution-results-POSTapi-user-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-user-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user-register"></code></pre>
</div>
<div id="execution-error-POSTapi-user-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user-register"></code></pre>
</div>
<form id="form-POSTapi-user-register" data-method="POST" data-path="api/user/register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-user-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-user-register" onclick="tryItOut('POSTapi-user-register');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-user-register" onclick="cancelTryOut('POSTapi-user-register');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-user-register" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/user/register</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-user-register" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-user-register" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>username</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="username" data-endpoint="POSTapi-user-register" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-user-register" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-user-register" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>password_confirmed</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password_confirmed" data-endpoint="POSTapi-user-register" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>birthday</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="birthday" data-endpoint="POSTapi-user-register" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="gender" data-endpoint="POSTapi-user-register" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>role</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="role" data-endpoint="POSTapi-user-register" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>city</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="city" data-endpoint="POSTapi-user-register" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="address" data-endpoint="POSTapi-user-register" data-component="query"  hidden>
<br>
optional
</p>
</form>
<h2>api/user/login</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/user/login?email=dolore&amp;password=sequi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/user/login"
);

let params = {
    "email": "dolore",
    "password": "sequi",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "token": "token_value",
 "token_type": "token_type
}</code></pre>
<div id="execution-results-POSTapi-user-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-user-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user-login"></code></pre>
</div>
<div id="execution-error-POSTapi-user-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user-login"></code></pre>
</div>
<form id="form-POSTapi-user-login" data-method="POST" data-path="api/user/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-user-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-user-login" onclick="tryItOut('POSTapi-user-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-user-login" onclick="cancelTryOut('POSTapi-user-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-user-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/user/login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-user-login" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-user-login" data-component="query" required  hidden>
<br>

</p>
</form>
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var languages = ["bash","javascript"];
        setupLanguages(languages);
    });
</script>
</body>
</html>