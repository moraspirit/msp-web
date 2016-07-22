var zxcMarquee={

    init:function(o){
        var mde=o.Mode,mde=typeof(mde)=='string'&&mde.charAt(0).toUpperCase()=='H'?['left','offsetWidth','top','width']:['top','offsetHeight','left','height'],id=o.ID,srt=o.StartDelay,ud=o.StartDirection,p=document.getElementById(id),obj=p.getElementsByTagName('DIV')[0],sz=obj[mde[1]],clone;
        p.style.overflow='hidden';
        obj.style.position='absolute';
        obj.style[mde[0]]='0px';
        obj.style[mde[3]]=sz+'px';
        clone=obj.cloneNode(true);
        clone.style[mde[0]]=sz+'px';
        clone.style[mde[2]]='0px';
        obj.appendChild(clone);
        o=this['zxc'+id]={
            obj:obj,
            mde:mde[0],
            sz:sz
        }
        if (typeof(srt)=='number'){
            o.dly=setTimeout(function(){ zxcMarquee.scroll(id,typeof(ud)=='number'?ud:-1); },srt);
        }
        else {
            this.scroll(id,0)
        }
    },

    scroll:function(id,ud){
        var oop=this,o=this['zxc'+id],p;
        if (o){
            ud=typeof(ud)=='number'?ud:0;
            clearTimeout(o.dly);
            p=parseInt(o.obj.style[o.mde])+ud;
            if ((ud>0&&p>0)||(ud<0&&p<-o.sz)){
                p+=o.sz*(ud>0?-1:1);
            }
            o.obj.style[o.mde]=(p-2)+'px';
            o.dly=setTimeout(function(){ oop.scroll(id,ud); },65);
        }
    }
}

function init(){

    zxcMarquee.init({
        ID:'marquee1',     // the unique ID name of the parent DIV.                        (string)
        Mode:'Horizontal',   //(optional) the mode of execution, 'Vertical' or 'Horizontal'. (string, default = 'Vertical')
        StartDelay:2000,   //(optional) the auto start delay in milli seconds'.            (number, default = no auto start)
        StartDirection:-1  //(optional) the auto start scroll direction'.                  (number, default = -1)
    });


}

if (window.addEventListener)
    window.addEventListener("load", init, false)
else if (window.attachEvent)
    window.attachEvent("onload", init)
else if (document.getElementById)
    window.onload=init