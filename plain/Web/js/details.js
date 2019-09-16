var maxVal;
var flag = false;
var triangles = [];
var totalTriangles = 372;
for(var i=0;i<totalTriangles;i++)
{
    triangles[i] = Math.floor(Math.random() * totalTriangles);
}

var section = [
    [272, 273, 274, 275, 257, 258, 259, 260, 261, 262, 263],
    [8, 7, 1, 12, 13 ,14 ,15, 17, 18,19 ,20]
];
var sectionWidth = section[0].length;
var sectionHeight = section.length;

function setIcons(a){
    maxVal = a;
}

function paral(){ 
    var scene = document.getElementById('scene');
    var parallaxInstanceWeb = new Parallax(scene,{
        pointerEvents: true
    });
}

function smoothscroll(){
    
    var currentScroll = document.documentElement.scrollTop || document.body.scrollTop;
    if (currentScroll > 0) {
         window.requestAnimationFrame(smoothscroll);
         document.body.scrollTop = currentScroll - (currentScroll/20);
    }
};
function showInfo(i){
    clearAll();
    var h = document.getElementById("img"+i).height;
    var w = document.getElementById("img"+i).width;
    document.getElementById("link"+i).style = "display:inline";
    document.getElementById("info"+i).style = "display:inline;width:"+w+"px;height:"+h+"px;position:absolute;z-index:50;";
    
}
function hideInfo(i){
    document.getElementById("link"+i).style.display = "none";
}
function clearAll(){
    for(var a=1;a<maxVal;a++)
     document.getElementById("link"+a).style.display = "none";
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
        setTimeout(triangleChange,5);
    }
    else
    {
        setTimeout(glitch,100,0);
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
            if(section[i][sectionWidth-1] == 372) section[i][sectionWidth-1] = 0;
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