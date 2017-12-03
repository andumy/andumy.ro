var triangles = [];
var totalTriangles = 250;
for(var i=0;i<totalTriangles;i++)
{
    triangles[i] = Math.floor(Math.random() * 284);
}

var section = [
    [272, 273, 274, 275, 257, 258, 259, 260, 261, 262, 263],
    [8, 7, 1, 12, 13 ,14 ,15, 17, 18,19 ,20]
];
var sectionWidth = section[0].length;
var sectionHeight = section.length;

var flag = false;
var noScroll = false;

var anchors = ["graphics", "branding", "aboutme", "webdevelopment", "oop" ];
var active = 2;



function slide(){
    document.getElementById("portrait").style="margin-left:0px";
    document.getElementById("headline").style="margin-left:0vw";
    document.getElementById("subheadline").style="margin-left:16vw";
}

function initialDisplay(){
    for(var i=0;i<totalTriangles;i++)
    {
        if(!document.getElementById("triangle"+triangles[i]).classList.contains("grayTriangle"))
        {
            document.getElementById("triangle"+triangles[i]).classList.add("grayTriangle");
        }
        
    }
    triangleChange();
}

function triangleChange(){  


    document.getElementById("triangle"+triangles[totalTriangles-1]).classList.remove("grayTriangle"); 
     totalTriangles-=1;

    if(totalTriangles>0)
    {
        setTimeout(triangleChange,20);
    }
    else
    {
        setTimeout(glitch,1000,0);
    } 
}

function glitch(index){

    if(index<sectionWidth && flag == false)
    {
        for(var i = 0; i < sectionHeight ; i++)
        {
            document.getElementById("triangle"+section[i][index]).classList.add("grayTriangle");
        }
        setTimeout(glitch,25,index+1);
    }
    else
    {
        flag = true;
    }    
    if(flag == true){

        for(var i = 0; i < sectionHeight ; i++)
        {
            document.getElementById("triangle"+section[i][0]).classList.remove("grayTriangle");
        }
        
        

        for(var i=0;i<sectionHeight;i++)
        {
            for(var j=0;j<sectionWidth-1;j++)
            {
                section[i][j] = section[i][j+1];
                section[i][j] = section[i][j+1];
            }
        }

        for(var i = 0; i < sectionHeight ; i++)
        {
            section[i][sectionWidth-1] = section[i][sectionWidth-2]+1; 
            if(section[i][sectionWidth-1] == 285) section[i][sectionWidth-1] = 0;
        }
       
             
        for(var i=0;i<sectionHeight;i++)
        {
            for(var j=0;j<sectionWidth;j++)
            {
                if(!document.getElementById("triangle"+section[i][j]).classList.contains("grayTriangle"))
                {
                    document.getElementById("triangle"+section[i][j]).classList.add("grayTriangle");
                }
            }
        }
        setTimeout(glitch,25,index);
    }
}

function activate(index){
   active = index;
    for(var i=0;i<index;i++)
    {
        document.getElementById(anchors[i]).style = "margin-left:-100vw";
    }
    document.getElementById(anchors[index]).style = "margin-left:0px";
    for(var i=index+1;i<anchors.length;i++)
    {
        document.getElementById(anchors[i]).style = "margin-left:100vw";
    } 
}


$(document).on('mousewheel', function(e) {
    var delta = e.originalEvent.wheelDelta;
    if(noScroll)
    {
        return true;
    }
    if(delta<0)
    {
       if(active!=0)
       {
            activate(active-1);
            noScroll = true;
       }
    }
    else
    {
        if(active!=anchors.length-1)
        {
            activate(active+1);
            noScroll = true;
        }
    }
    setTimeout(function(){noScroll = false;}, 1500);
});

