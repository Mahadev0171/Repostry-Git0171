const express = require('express')
const path = require('path');
const http = require('http');

const app = express();

const port = process.env.PORT || 3001;
// Serve only the static files form the dist directory
app.use(express.static(__dirname + '/dist/Bdp-webpage-build'));

app.get('/*', function(req,res) {
    
res.sendFile(path.join(__dirname));
});

// Start the app by listening on the default Heroku port
const server = http.createServer(app);

server.listen(port,()=>console.log('Running'))