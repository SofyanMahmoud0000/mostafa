<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Mostafa APIs docs</title>

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
            <li>Last updated: May 17 2023</li>
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
<p>To authenticate requests, include an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting your dashboard and clicking <b>Generate API token</b>.</p><h1>Auth</h1>
<h2>api/workshop/login</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/workshop/login?username=et&amp;password=voluptas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/workshop/login"
);

let params = {
    "username": "et",
    "password": "voluptas",
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
<div id="execution-results-POSTapi-workshop-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-workshop-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-workshop-login"></code></pre>
</div>
<div id="execution-error-POSTapi-workshop-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-workshop-login"></code></pre>
</div>
<form id="form-POSTapi-workshop-login" data-method="POST" data-path="api/workshop/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-workshop-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-workshop-login" onclick="tryItOut('POSTapi-workshop-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-workshop-login" onclick="cancelTryOut('POSTapi-workshop-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-workshop-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/workshop/login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>username</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="username" data-endpoint="POSTapi-workshop-login" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-workshop-login" data-component="query" required  hidden>
<br>

</p>
</form>
<h2>api/provider/login</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/provider/login?username=animi&amp;password=esse" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/provider/login"
);

let params = {
    "username": "animi",
    "password": "esse",
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
<div id="execution-results-POSTapi-provider-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-provider-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-provider-login"></code></pre>
</div>
<div id="execution-error-POSTapi-provider-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-provider-login"></code></pre>
</div>
<form id="form-POSTapi-provider-login" data-method="POST" data-path="api/provider/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-provider-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-provider-login" onclick="tryItOut('POSTapi-provider-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-provider-login" onclick="cancelTryOut('POSTapi-provider-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-provider-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/provider/login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>username</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="username" data-endpoint="POSTapi-provider-login" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-provider-login" data-component="query" required  hidden>
<br>

</p>
</form><h1>Endpoints</h1>
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
</form><h1>Provider</h1>
<h2>api/provider/tickets</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/provider/tickets" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/provider/tickets"
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
    "error": "forbidden"
}</code></pre>
<div id="execution-results-GETapi-provider-tickets" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-provider-tickets"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-provider-tickets"></code></pre>
</div>
<div id="execution-error-GETapi-provider-tickets" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-provider-tickets"></code></pre>
</div>
<form id="form-GETapi-provider-tickets" data-method="GET" data-path="api/provider/tickets" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-provider-tickets', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-provider-tickets" onclick="tryItOut('GETapi-provider-tickets');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-provider-tickets" onclick="cancelTryOut('GETapi-provider-tickets');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-provider-tickets" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/provider/tickets</code></b>
</p>
<p>
<label id="auth-GETapi-provider-tickets" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-provider-tickets" data-component="header"></label>
</p>
</form>
<h2>api/provider/drivers</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/provider/drivers" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/provider/drivers"
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
    "error": "forbidden"
}</code></pre>
<div id="execution-results-GETapi-provider-drivers" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-provider-drivers"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-provider-drivers"></code></pre>
</div>
<div id="execution-error-GETapi-provider-drivers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-provider-drivers"></code></pre>
</div>
<form id="form-GETapi-provider-drivers" data-method="GET" data-path="api/provider/drivers" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-provider-drivers', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-provider-drivers" onclick="tryItOut('GETapi-provider-drivers');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-provider-drivers" onclick="cancelTryOut('GETapi-provider-drivers');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-provider-drivers" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/provider/drivers</code></b>
</p>
<p>
<label id="auth-GETapi-provider-drivers" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-provider-drivers" data-component="header"></label>
</p>
</form>
<h2>api/provider/reasons</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/provider/reasons" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/provider/reasons"
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
    "error": "forbidden"
}</code></pre>
<div id="execution-results-GETapi-provider-reasons" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-provider-reasons"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-provider-reasons"></code></pre>
</div>
<div id="execution-error-GETapi-provider-reasons" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-provider-reasons"></code></pre>
</div>
<form id="form-GETapi-provider-reasons" data-method="GET" data-path="api/provider/reasons" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-provider-reasons', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-provider-reasons" onclick="tryItOut('GETapi-provider-reasons');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-provider-reasons" onclick="cancelTryOut('GETapi-provider-reasons');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-provider-reasons" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/provider/reasons</code></b>
</p>
<p>
<label id="auth-GETapi-provider-reasons" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-provider-reasons" data-component="header"></label>
</p>
</form>
<h2>api/provider/workshops</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/provider/workshops" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/provider/workshops"
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
    "error": "forbidden"
}</code></pre>
<div id="execution-results-GETapi-provider-workshops" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-provider-workshops"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-provider-workshops"></code></pre>
</div>
<div id="execution-error-GETapi-provider-workshops" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-provider-workshops"></code></pre>
</div>
<form id="form-GETapi-provider-workshops" data-method="GET" data-path="api/provider/workshops" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-provider-workshops', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-provider-workshops" onclick="tryItOut('GETapi-provider-workshops');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-provider-workshops" onclick="cancelTryOut('GETapi-provider-workshops');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-provider-workshops" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/provider/workshops</code></b>
</p>
<p>
<label id="auth-GETapi-provider-workshops" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-provider-workshops" data-component="header"></label>
</p>
</form>
<h2>api/provider/tickets/create</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/provider/tickets/create?driver_id=unde&amp;workshop_id=neque&amp;reason_id=hic" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/provider/tickets/create"
);

let params = {
    "driver_id": "unde",
    "workshop_id": "neque",
    "reason_id": "hic",
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
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "error": "forbidden"
}</code></pre>
<div id="execution-results-POSTapi-provider-tickets-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-provider-tickets-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-provider-tickets-create"></code></pre>
</div>
<div id="execution-error-POSTapi-provider-tickets-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-provider-tickets-create"></code></pre>
</div>
<form id="form-POSTapi-provider-tickets-create" data-method="POST" data-path="api/provider/tickets/create" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-provider-tickets-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-provider-tickets-create" onclick="tryItOut('POSTapi-provider-tickets-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-provider-tickets-create" onclick="cancelTryOut('POSTapi-provider-tickets-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-provider-tickets-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/provider/tickets/create</code></b>
</p>
<p>
<label id="auth-POSTapi-provider-tickets-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-provider-tickets-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>driver_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="driver_id" data-endpoint="POSTapi-provider-tickets-create" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>workshop_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="workshop_id" data-endpoint="POSTapi-provider-tickets-create" data-component="query" required  hidden>
<br>

</p>
<p>
<b><code>reason_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="reason_id" data-endpoint="POSTapi-provider-tickets-create" data-component="query" required  hidden>
<br>

</p>
</form>
<h2>api/provider/tickets/remove/{id}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/provider/tickets/remove/excepturi" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/provider/tickets/remove/excepturi"
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
    "error": "forbidden"
}</code></pre>
<div id="execution-results-GETapi-provider-tickets-remove--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-provider-tickets-remove--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-provider-tickets-remove--id-"></code></pre>
</div>
<div id="execution-error-GETapi-provider-tickets-remove--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-provider-tickets-remove--id-"></code></pre>
</div>
<form id="form-GETapi-provider-tickets-remove--id-" data-method="GET" data-path="api/provider/tickets/remove/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-provider-tickets-remove--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-provider-tickets-remove--id-" onclick="tryItOut('GETapi-provider-tickets-remove--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-provider-tickets-remove--id-" onclick="cancelTryOut('GETapi-provider-tickets-remove--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-provider-tickets-remove--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/provider/tickets/remove/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-provider-tickets-remove--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-provider-tickets-remove--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-provider-tickets-remove--id-" data-component="url" required  hidden>
<br>

</p>
</form><h1>Workshop</h1>
<h2>api/workshop/tickets</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/workshop/tickets" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/workshop/tickets"
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
    "error": "forbidden"
}</code></pre>
<div id="execution-results-GETapi-workshop-tickets" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-workshop-tickets"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-workshop-tickets"></code></pre>
</div>
<div id="execution-error-GETapi-workshop-tickets" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-workshop-tickets"></code></pre>
</div>
<form id="form-GETapi-workshop-tickets" data-method="GET" data-path="api/workshop/tickets" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-workshop-tickets', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-workshop-tickets" onclick="tryItOut('GETapi-workshop-tickets');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-workshop-tickets" onclick="cancelTryOut('GETapi-workshop-tickets');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-workshop-tickets" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/workshop/tickets</code></b>
</p>
<p>
<label id="auth-GETapi-workshop-tickets" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-workshop-tickets" data-component="header"></label>
</p>
</form>
<h2>api/workshop/tickets/resolve/{id}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/workshop/tickets/resolve/molestiae" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/workshop/tickets/resolve/molestiae"
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
    "error": "forbidden"
}</code></pre>
<div id="execution-results-GETapi-workshop-tickets-resolve--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-workshop-tickets-resolve--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-workshop-tickets-resolve--id-"></code></pre>
</div>
<div id="execution-error-GETapi-workshop-tickets-resolve--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-workshop-tickets-resolve--id-"></code></pre>
</div>
<form id="form-GETapi-workshop-tickets-resolve--id-" data-method="GET" data-path="api/workshop/tickets/resolve/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-workshop-tickets-resolve--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-workshop-tickets-resolve--id-" onclick="tryItOut('GETapi-workshop-tickets-resolve--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-workshop-tickets-resolve--id-" onclick="cancelTryOut('GETapi-workshop-tickets-resolve--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-workshop-tickets-resolve--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/workshop/tickets/resolve/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-workshop-tickets-resolve--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-workshop-tickets-resolve--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-workshop-tickets-resolve--id-" data-component="url" required  hidden>
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