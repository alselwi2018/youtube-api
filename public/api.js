
/* @author Florian Fries (contact@florianfries.me) */
function tplawesome(e,t){res=e;for(var n=0;n<t.length;n++){res=res.replace(/\{\{(.*?)\}\}/g,function(e,r){return t[n][r]})}return res}
$(function(){
    $("form").on("submit", function(e){
        e.preventDefault();
        var q = $("#query").val();
        var request = gapi.client.youtube.search.list({
            part: "snippet",
            type: "video",
            // q: encodeURIComponent($("#search").val()).replace(/%20/g, "+"),
            q: q,
            maxResults: 10,
            order: "viewCount",
            publishedAfter: "2020-02-01T00:00:00Z"
        });
        //execute
        request.execute(function(response){
           var res = response.result;
           $.each(res.items, function(i, v){
           var url = "https://www.youtube.com/watch?v="+v.id.videoId;
            $.get("allVideos.html",function(data){
                $('#res').append(tplawesome(data, [{"videoid":v.id.videoId,"description":v.snippet.description,"thumbnails":  url}]));
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



