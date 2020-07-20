var express = require('express'),
    app =  express(),
    server = require('http').createServer(app),
    io = require('socket.io').listen(server);

 
app.get('/',function(req, res) {	
     res.sendfile(__dirname + '/index.html');
});

io.sockets.on('connection', function (socket) {
    socket.on('send message', function (data) {
        io.sockets.emit('new message', data);
        //socket.broadcast.emit('new message', data);
    });
});

http.listen(process.env.port || 1337, function(){
    console.log('listening on localhost:1337');
});

