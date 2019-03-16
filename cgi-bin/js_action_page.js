const qs = require('querystring');

function getPost(request, response) {
    // assumes POST method

    request.on('data', function(data) {
        body+= data;
        if (body.length > 1e6) {
            request.connection.destroy();
        }
    });

    request.on('end', function() {
        var post = qs.parse(body);
    });
}
getPost();
console.log(post.age);