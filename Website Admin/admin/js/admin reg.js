//profile pic
var profile = function(event)
{
    var image = documnet.getElementById('profile_picture');
    image.src = URL.createObjectURL(event.target.files[0]);
};
