# Relations management

APIs for managing relations

## Create a relation.


This endpoint allows you to create a relation betwen 2 nodes.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/relations/1/2" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/relations/1/2"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


> Example response (201, created):

```json
{
    "result": "Relation created"
}
```
> Example response (422, UnprocessableEntity):

```json
{
    "error": "Parent or child node invalid"
}
```
> Example response (422, UnprocessableEntity):

```json

{
"error": "Nodes doesn\'t related to the same graph"
}
```
> Example response (422, UnprocessableEntity):

```json
{
    "error": "Relation exists"
}
```
<div id="execution-results-POSTapi-v1-relations--parentId---childId-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-relations--parentId---childId-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-relations--parentId---childId-"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-relations--parentId---childId-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-relations--parentId---childId-"></code></pre>
</div>
<form id="form-POSTapi-v1-relations--parentId---childId-" data-method="POST" data-path="api/v1/relations/{parentId}/{childId}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-relations--parentId---childId-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-relations--parentId---childId-" onclick="tryItOut('POSTapi-v1-relations--parentId---childId-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-relations--parentId---childId-" onclick="cancelTryOut('POSTapi-v1-relations--parentId---childId-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-relations--parentId---childId-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/relations/{parentId}/{childId}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>parentId</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="parentId" data-endpoint="POSTapi-v1-relations--parentId---childId-" data-component="url" required  hidden>
<br>
integer Node Id.</p>
<p>
<b><code>childId</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="childId" data-endpoint="POSTapi-v1-relations--parentId---childId-" data-component="url" required  hidden>
<br>
integer Node Id.</p>
</form>


## Delete a relation.


This endpoint allows you to delete a relation.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/relations/1/2" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/relations/1/2"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


> Example response (200, success):

```json
{
    "result": "Relation deleted"
}
```
> Example response (422, UnprocessableEntity):

```json
{
    "error": "Relation not exists"
}
```
<div id="execution-results-DELETEapi-v1-relations--parentId---childId-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-relations--parentId---childId-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-relations--parentId---childId-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-relations--parentId---childId-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-relations--parentId---childId-"></code></pre>
</div>
<form id="form-DELETEapi-v1-relations--parentId---childId-" data-method="DELETE" data-path="api/v1/relations/{parentId}/{childId}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-relations--parentId---childId-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-relations--parentId---childId-" onclick="tryItOut('DELETEapi-v1-relations--parentId---childId-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-relations--parentId---childId-" onclick="cancelTryOut('DELETEapi-v1-relations--parentId---childId-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-relations--parentId---childId-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/relations/{parentId}/{childId}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>parentId</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="parentId" data-endpoint="DELETEapi-v1-relations--parentId---childId-" data-component="url" required  hidden>
<br>
integer Node Id.</p>
<p>
<b><code>childId</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="childId" data-endpoint="DELETEapi-v1-relations--parentId---childId-" data-component="url" required  hidden>
<br>
integer Node Id.</p>
</form>



