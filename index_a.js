function OnWeLoad()
{
	IDP.bw=0; IDP.bd=0;
	if(self.innerHeight)
	{	IDP.bw=self.innerWidth;
		IDP.bd=self.innerHeight;
	}
	else if(document.documentElement && document.documentElement.clientHeight)
	{	IDP.bw=document.documentElement.clientWidth;
		IDP.bd=document.documentElement.clientHeight;
	}
	else if(document.body)
	{	IDP.bw=document.body.clientWidth;
		IDP.bd=document.body.clientHeight;
	}
	IDP.bw=IDP.bw / 1.33;
	IDP.bd=IDP.bd / 1.33;
	IDP[1]={	x:new Array(-36,288),
				y:new Array(252,252),
				s:32 };
	IDP[2]=(V5)?document.getElementById('e7').style:(IE)?e7.style:document.e7;
	IDP[3]={	x:new Array(-24,324),
				y:new Array(252,252),
				s:34 };
	IDP[4]=(V5)?document.getElementById('e6').style:(IE)?e6.style:document.e6;
	IDP[5]={	x:new Array(-13,346),
				y:new Array(252,252),
				s:35 };
	IDP[6]=(V5)?document.getElementById('e5').style:(IE)?e5.style:document.e5;
	IDP[7]={	x:new Array(-24,358),
				y:new Array(252,252),
				s:38 };
	IDP[8]=(V5)?document.getElementById('e4').style:(IE)?e4.style:document.e4;
	IDP[9]={	x:new Array(-24,381),
				y:new Array(252,252),
				s:40 };
	IDP[10]=(V5)?document.getElementById('e3').style:(IE)?e3.style:document.e3;
	IDP[11]={	x:new Array(-34,405),
				y:new Array(252,252),
				s:43 };
	IDP[12]=(V5)?document.getElementById('e2').style:(IE)?e2.style:document.e2;
	IDP[13]={	x:new Array(-24,440),
				y:new Array(252,252),
				s:46 };
	IDP[14]=(V5)?document.getElementById('e1').style:(IE)?e1.style:document.e1;
	window.setTimeout('DoRoute(2,1,0,0,0,100)',1000);
	window.setTimeout('DoRoute(4,3,0,0,0,100)',1000);
	window.setTimeout('DoRoute(6,5,0,0,0,100)',1000);
	window.setTimeout('DoRoute(8,7,0,0,0,100)',1000);
	window.setTimeout('DoRoute(10,9,0,0,0,100)',1000);
	window.setTimeout('DoRoute(12,11,0,0,0,100)',1000);
	window.setTimeout('DoRoute(14,13,0,0,0,100)',1000);
}


/*--- EndOfFile ---*/
