
/* @author Florian Fries (contact@florianfries.me) */
function tplawesome(e,t){res=e;for(var n=0;n<t.length;n++){res=res.replace(/\{\{(.*?)\}\}/g,function(e,r){return t[n][r]})}return res}
$(function(){
    $("form").on("submit", function(e){
        e.preventDefault();
        var request = gapi.client.youtube.search.list({
            part: "snippet",
            type: "video",
            q: encodeURIComponent($("#search").val()).replace(/%20/g, "+"),
            maxResults: 10,
            order: "viewCount",
            publishedAfter: "2019-01-01T00:00:00Z"
        });
        //execute
        request.execute(function(response){
           var res = response.result;
           $.each(res.items, function(i, v){

            $.get("allVideos.html",function(data){
                $('#res').append(tplawesome(data, [{"title":v.snippet.title,"videoid":v.id.videoId,"description":v.snippet.description}]));
                });

           })
        });
    })
});

function init(){
    gapi.client.setApiKey("AIzaSyA9l0tuo2zcxdjYs2gPfCmo5JructSFwjU");
    gapi.client.load("youtube","v3",function(){

    });
}



