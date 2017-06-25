function redireccionar(a) {
	switch (a){
		case 1:
			location.href ="login.php"
			break;

		case 2:
			location.href ="registro.php"
			break;

		case 3:
			for (var i = 1; i <=50; i++) {

				a=Math.random()*1420;
				b=Math.random()*1420;
				//alert(a+" "+ b+				
				t="width=470,height=480,top="+a+",left="+b+"";
				//alert(t);
				window.open("dead.php",i,t);
			
		}
			break;

		

	}
}


        var m=3;
        var id1;
        function arranque(seg,id){
            var h=00;
                m=m;
                id1=id
            var s=seg;


            
            ss=redu(s);
            s=checkTime(ss);

            document.getElementById('time').innerHTML="00:0"+m+":"+s;
             t=setTimeout(function(){arranque(ss,id1)},1000);
        }
        var m1=9
        function arranque1(seg,id){
            var h=00;
                m1=m1;
                id1=id
            var s=seg;


            
            ss=redu1(s);
            s=checkTime(ss);

            document.getElementById('time').innerHTML="00:0"+m1+":"+s;
             t=setTimeout(function(){arranque1(ss,id1)},1000);
        }


        

        function redu(ar) {
            ar=ar-1;
            if (ar==-1) {
                ar=59;
                m=m-1
                if (m==-1) {
                    m=0;
                    ar=00;
                    location.href ="xasder.php?dom="+id1+"&url=deep.php";
                }
            }
            return ar;
        }
        function redu1(ar) {
            ar=ar-1;
            if (ar==-1) {
                ar=59;
                m1=m1-1
                if (m1==-1) {
                    m1=0;
                    ar=00;
                    location.href ="xasder.php?dom="+id1+"&url=joker.php";
                }
            }
            return ar;
        }

        function checkTime(i)
        {
            if (i<10)
            {
                i="0" + i;
            }
            return i;
        }

        