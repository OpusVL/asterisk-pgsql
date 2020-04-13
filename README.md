# Asterisk with PostgreSQL Real-time Database

This container set provides the Asterisk 17 PBX with a real-time database from PostgreSQL.

You should provide your own `etc/asterisk` content. The files provided allow for a basic asterisk instance that connects to PostgreSQL using ODBC.

The content under the `etc/asterisk/dist` folder contains all the Asterisk sample configuration files.

> Now with functional SIP over TLS.