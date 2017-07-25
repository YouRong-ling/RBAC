public static function short($url){
	$key = 'page';
	$urlhash = md5($key.$url);//生成32位
	$len = strlen($urlhash);
	//将加密后的串分成4段，每个字段4字节，对每段进行计算，一共可以生成四组连接
	for($i=0;$i<4;$i++){
		$urlhash_piece = substr($urlhash,$i*$len/4,$len/4);
		//将分段的位于0x3fffffff做位与，把30位以后的加密串都归零
		$hex = hexdec($urlhash_piece) & 0x3ffffff;
	}


}

