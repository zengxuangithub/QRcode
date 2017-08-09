<?php

	/*
	 *	create by zeng
	 * 	date:2017/08/09
	 * 	connect:649590593@qq.com
	 *  
	 * 
	 * 
	 */
	//第二个参数   生成图片的存放地址
	//   第四个参数   图片尺寸 
	//最后一个参数   save and print
	// 第三个参数 QR_ECLEVEL_L  纠错级别
	
	include "phpqrcode/qrlib.php";
	QRcode::png('123','adv.jpg',QR_ECLEVEL_L,6,2,true);
	
?>