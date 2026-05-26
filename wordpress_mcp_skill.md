# WordPress MCP Server Integration & Skills Guide

This guide details how any MCP-compatible AI agent (such as Claude, Cline, or Cursor) can connect to and interact with the **Automattic WordPress MCP** server on `easymarketingus.com` to manage the site programmatically.

---

## 1. Client Configuration (Claude / Cline)

To connect your AI client to the WordPress site's MCP server, add this configuration block to your client settings file (e.g., `%APPDATA%\Claude\claude_desktop_config.json` or `cline_mcp_settings.json`):

```json
{
  "mcpServers": {
    "wordpress-mcp-remote": {
      "command": "npx",
      "args": [
        "-y",
        "@automattic/mcp-wordpress-remote@latest"
      ],
      "env": {
        "WP_API_URL": "https://easymarketingus.com/",
        "JWT_TOKEN": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczovL2Vhc3ltYXJrZXRpbmd1cy5jb20iLCJpYXQiOjE3Nzk3ODI2MzAsImV4cCI6MTgyMzc0NjMwLCJ1c2VyX2lkIjoyLCJqdGkiOiJQNEdXR0o4ZGlZWHJkTE5CNk5FSjZzUklBUnZvbWZCVSJ9.9jsbm57_22pG7Vow0Tzf2X9SuuWw2_bIJd0EMYCjbN0"
      }
    }
  }
}
```

---

## 2. Available Core Tools

Once connected, the server exposes three dynamic, generic API execution tools that map to all WordPress REST API endpoints:

### 1. `list_api_functions`
* **Purpose**: Discovers all registered endpoints and API namespaces on the WordPress site.
* **Usage**: Call it without parameters to map the entire REST space.

### 2. `get_function_details`
* **Purpose**: Gets parameter specifications, validation rules, and schema for a specific REST route.
* **Required Arguments**:
  * `route`: The API route (e.g., `/wp/v2/posts` or `/wp/v2/pages`).

### 3. `run_api_function`
* **Purpose**: Runs a query or mutates data (GET, POST, PUT, DELETE) on any active route.
* **Required Arguments**:
  * `route`: Target route.
  * `method`: `GET`, `POST`, `PUT`, or `DELETE`.
  * `args`: (Optional) Object containing payload, filters, or query arguments.

---

## 3. High-Speed Workflow Examples

Here are exact commands your AI agent can issue using `run_api_function` to work at lightning speeds:

### Fetching Pages or Posts
```json
{
  "route": "/wp/v2/pages",
  "method": "GET",
  "args": {
    "per_page": 10,
    "status": "publish"
  }
}
```

### Retrieving Specific Homepage Details (Page ID: 51)
```json
{
  "route": "/wp/v2/pages/51",
  "method": "GET"
}
```

### Modifying Page Attributes (e.g. template selection)
```json
{
  "route": "/wp/v2/pages/51",
  "method": "POST",
  "args": {
    "meta": {
      "_wp_page_template": "template-liquid-glass.php"
    }
  }
}
```

### Fetching Registered Custom Plugins
```json
{
  "route": "/wp/v2/plugins",
  "method": "GET"
}
```

---

## 4. Best Practices for Developers
1. **Bypass Page Caches**: Always append a random parameter or request header if you suspect your GET responses are returning cached data.
2. **Surgical Scope**: Use specific filters like `include`, `search`, or `parent` to keep JSON transfer sizes minimal and speed up execution.
3. **Session Verification**: Verify that the JWT header remains valid. The current token is active and authorized through June 2026.
