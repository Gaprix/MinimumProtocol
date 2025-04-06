# MinimumProtocol Plugin
The MinimumProtocol plugin for PocketMine-MP 5.0.0 ensures that players use a minimum accepted protocol version to connect to the server. If a player's protocol version is below the specified minimum, they will be disconnected with an incompatible protocol message.

## Features
- Enforces a minimum protocol version for player connections.
- Configurable minimum protocol version through the plugin's config file.
- Supports NetherGamesMC fork of PocketMine-MP

## Installation
1. Download the plugin and place it in the `plugins` folder of your PocketMine-MP server.
2. Start the server to generate the default configuration file.
3. Edit the `config.yml` file in the `plugin_data/MinimumProtocol` folder to set the desired minimum protocol version.

## Configuration
- `minimum-accepted-protocol`: The minimum accepted protocol version. Set to `-1` to use the current protocol version.
