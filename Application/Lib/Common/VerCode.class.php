<?php
class VerCode
{
	private $text;

	public function VerCode()
	{
		$this->text = rand(1000,9999)."";
	}

	public function GetImage()
	{
	    header('Content-Type:image/png');
		$im = imagecreatetruecolor(100, 40);
		$bg = imagecolorallocate($im, 255,255, 255);
		imagefilledrectangle($im, 0, 0, 100, 40, $bg);
		for($i=0;$i<4;$i++)
		{
			imagestring($im,5,rand(30*$i,30+10*$i),rand(2,10),$this->text[$i],imagecolorallocate($im, rand(0,255), rand(0,255), rand(0,255)));
		}
		for($i=0;$i<=300;$i++)
		{
			imagesetpixel($im, rand(1,99),rand(1,39), imagecolorallocate($im, rand(0,255), rand(0,255), rand(0,255)));
		}

		for($i=0;$i<=6;$i++)
		{
			imageline($im, rand(1,99), rand(1,39), rand(1,99), rand(1,39), imagecolorallocate($im, rand(0,255), rand(0,255), rand(0,255)));
		}
		imagerectangle($im, 0, 0, 99, 39, imagecolorallocate($im, rand(0,255), rand(0,255), rand(0,255)));
		imagepng($im);
	}

	public function GetVerCode()
	{
		return $this->text;
	}
}
?>