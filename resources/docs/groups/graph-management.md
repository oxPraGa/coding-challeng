# Graph management

APIs for managing graphs

## Create an empty graph.


This endpoint allows you to create an empty graph.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/graphs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"Blalba","description":"Blalba dwkj jdkwjkjw"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/graphs"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Blalba",
    "description": "Blalba dwkj jdkwjkjw"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (201, created):

```json

"data": {
 "id": 1,
 "name": "gssstegssssdsde",
 "description": "wfwfwfw"
 }
```
> Example response (422, Unprocessable Entity):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "name": [
            "The name has already been taken."
        ]
    }
}
```
<div id="execution-results-POSTapi-v1-graphs" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-graphs"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-graphs"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-graphs" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-graphs"></code></pre>
</div>
<form id="form-POSTapi-v1-graphs" data-method="POST" data-path="api/v1/graphs" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-graphs', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-graphs" onclick="tryItOut('POSTapi-v1-graphs');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-graphs" onclick="cancelTryOut('POSTapi-v1-graphs');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-graphs" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/graphs</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-graphs" data-component="body" required  hidden>
<br>
The name of the graph.</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="description" data-endpoint="POSTapi-v1-graphs" data-component="body" required  hidden>
<br>
The description of the graph.</p>

</form>


## Update a graph meta data.


This endpoint allows you to update a graph.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/graphs/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"description":"Blalba dwkj jdkwjkjw","name":"Blalba"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/graphs/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "description": "Blalba dwkj jdkwjkjw",
    "name": "Blalba"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200, success):

```json
{
    "result": "Graph updated"
}
```
<div id="execution-results-PUTapi-v1-graphs--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-graphs--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-graphs--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-graphs--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-graphs--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-graphs--id-" data-method="PUT" data-path="api/v1/graphs/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-graphs--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-graphs--id-" onclick="tryItOut('PUTapi-v1-graphs--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-graphs--id-" onclick="cancelTryOut('PUTapi-v1-graphs--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-graphs--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/graphs/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-graphs--id-" data-component="url" required  hidden>
<br>
numeric Graph Id.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="description" data-endpoint="PUTapi-v1-graphs--id-" data-component="body" required  hidden>
<br>
The description of the graph.</p>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-v1-graphs--id-" data-component="body" required  hidden>
<br>
The name of the graph.</p>

</form>


## Delete a graph.


This endpoint allows you to delete a graph.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/graphs/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/graphs/1"
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
    "result": "Graph deleted"
}
```
> Example response (422, UnprocessableEntity):

```json
{
    "result": "Graph not found"
}
```
<div id="execution-results-DELETEapi-v1-graphs--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-graphs--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-graphs--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-graphs--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-graphs--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-graphs--id-" data-method="DELETE" data-path="api/v1/graphs/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-graphs--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-graphs--id-" onclick="tryItOut('DELETEapi-v1-graphs--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-graphs--id-" onclick="cancelTryOut('DELETEapi-v1-graphs--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-graphs--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/graphs/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v1-graphs--id-" data-component="url" required  hidden>
<br>
integer Graph Id.</p>
</form>


## Get all graphs.


This endpoint allows you to get all graphs.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/graphs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/graphs"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (201):

```json
{
    "data": [
        {
            "id": 1,
            "name": "gtegssssdsde",
            "description": "wfwfwfw"
        },
        {
            "id": 3,
            "name": "Dr. Spencer Crona II",
            "description": "gtegsssdsdesss"
        },
        {
            "id": 4,
            "name": "Afton Trantow",
            "description": "Inventore qui nisi dolorum exercitationem qui vero corporis. Sed occaecati ut quos tempore blanditiis vel saepe eum. Id repellendus placeat voluptas sed aut molestiae."
        },
        {
            "id": 5,
            "name": "Prof. Lucio Littel DVM",
            "description": "Quia molestiae exercitationem est quas minus quasi vitae. Ut necessitatibus atque aut et et odit dolorem officia. Vel nemo blanditiis quod."
        },
        {
            "id": 6,
            "name": "Buford Bradtke III",
            "description": "Temporibus accusamus ut enim vero fuga magni. Tempore nihil nostrum ea deserunt et quisquam provident."
        },
        {
            "id": 7,
            "name": "Fanny Becker",
            "description": "Id quisquam voluptate et vitae eos qui unde. Aut perferendis quo ut. Repudiandae adipisci vel et ipsa repellendus temporibus. Eligendi totam recusandae accusamus et distinctio rem ut sint."
        },
        {
            "id": 8,
            "name": "Dr. Keara VonRueden",
            "description": "Rem est non quas amet. Qui et accusamus expedita voluptatum eum. Sit facere recusandae ut in placeat est ut. Voluptatum molestias omnis accusamus impedit laborum qui placeat."
        },
        {
            "id": 9,
            "name": "Novella Homenick",
            "description": "Et occaecati possimus omnis qui cumque earum laboriosam. Voluptas natus nam aut. Quisquam molestias laudantium quia sit deleniti qui aut. Vel fugit qui qui dignissimos perspiciatis."
        },
        {
            "id": 10,
            "name": "Jayne Ullrich",
            "description": "Quo illum perspiciatis consequuntur. Neque quis sunt est omnis enim et iste. Voluptatem qui voluptas vitae qui pariatur."
        },
        {
            "id": 11,
            "name": "Andres Hodkiewicz",
            "description": "Consectetur non et laboriosam temporibus accusamus. Voluptatibus vel architecto blanditiis et. Eum eaque est deleniti quidem aperiam."
        },
        {
            "id": 12,
            "name": "Dr. Eloy Yundt",
            "description": "Nihil praesentium sit ut quam illum. Sit temporibus enim rerum similique. Eligendi libero vitae deleniti. Quo sapiente et veritatis mollitia deleniti."
        },
        {
            "id": 13,
            "name": "Felix Gutkowski",
            "description": "Porro fugit natus rem doloribus consequatur. Et suscipit expedita sunt enim repellat quia. Velit vel natus corporis autem voluptas quam ab. Pariatur explicabo quia laborum at dolores."
        },
        {
            "id": 14,
            "name": "Rosamond O'Connell",
            "description": "Voluptas temporibus laboriosam ut iure et qui. Accusantium facilis et excepturi corrupti. Ut nobis quia sapiente minus quis enim."
        },
        {
            "id": 15,
            "name": "Jessyca Labadie",
            "description": "Modi et ipsam id soluta quisquam veniam tempore dolorem. Id sunt omnis dolorem dolor. Dicta eos quasi eaque. Autem ad omnis ducimus ea. Est sapiente ipsa sed laborum magni labore."
        },
        {
            "id": 16,
            "name": "Mr. Sylvan Lehner PhD",
            "description": "Culpa minima et odio et nisi. Minima numquam nulla omnis deleniti aut id maiores. Ut eum eos debitis et est. Voluptas cupiditate ea nisi. Laboriosam deserunt accusantium vitae."
        },
        {
            "id": 18,
            "name": "Ward Koss",
            "description": "Cumque odit nostrum vel praesentium beatae. Exercitationem dolorem earum qui sequi adipisci corporis magnam. Id quia ut qui aliquid."
        },
        {
            "id": 19,
            "name": "gssstegssssdsdsasae",
            "description": "wfwfwfw"
        },
        {
            "id": 20,
            "name": "gssstegssssssdsdsasae",
            "description": "wfwfwfw"
        }
    ]
}
```
<div id="execution-results-GETapi-v1-graphs" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-graphs"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-graphs"></code></pre>
</div>
<div id="execution-error-GETapi-v1-graphs" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-graphs"></code></pre>
</div>
<form id="form-GETapi-v1-graphs" data-method="GET" data-path="api/v1/graphs" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-graphs', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-graphs" onclick="tryItOut('GETapi-v1-graphs');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-graphs" onclick="cancelTryOut('GETapi-v1-graphs');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-graphs" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/graphs</code></b>
</p>
</form>


## Get single graphs.


This endpoint allows you to get single graphs with nodes & relations.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/graphs/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/graphs/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (201):

```json
{
    "data": {
        "id": 1,
        "name": "gtegssssdsde",
        "description": "wfwfwfw",
        "nodes": [
            {
                "id": 1,
                "relation": {
                    "parents": [],
                    "childs": []
                }
            },
            {
                "id": 3,
                "relation": {
                    "parents": [],
                    "childs": []
                }
            },
            {
                "id": 4,
                "relation": {
                    "parents": [],
                    "childs": []
                }
            },
            {
                "id": 5,
                "relation": {
                    "parents": [],
                    "childs": []
                }
            },
            {
                "id": 6,
                "relation": {
                    "parents": [],
                    "childs": []
                }
            },
            {
                "id": 7,
                "relation": {
                    "parents": [],
                    "childs": []
                }
            },
            {
                "id": 8,
                "relation": {
                    "parents": [],
                    "childs": []
                }
            },
            {
                "id": 9,
                "relation": {
                    "parents": [],
                    "childs": []
                }
            },
            {
                "id": 285,
                "relation": {
                    "parents": [],
                    "childs": []
                }
            }
        ]
    }
}
```
<div id="execution-results-GETapi-v1-graphs--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-graphs--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-graphs--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-graphs--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-graphs--id-"></code></pre>
</div>
<form id="form-GETapi-v1-graphs--id-" data-method="GET" data-path="api/v1/graphs/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-graphs--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-graphs--id-" onclick="tryItOut('GETapi-v1-graphs--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-graphs--id-" onclick="cancelTryOut('GETapi-v1-graphs--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-graphs--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/graphs/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-graphs--id-" data-component="url" required  hidden>
<br>
integer Graph Id.</p>
</form>



