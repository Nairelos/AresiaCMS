<?php

namespace App\Library;

class Guild
{
	public function getEmblem($string, $width=50)
	{
		$i = explode(',', $string);

		$bg_src = base_convert($i['0'], 36, 10); 
		$bg_color = base_convert($i['1'], 36, 10); 
		$logo_src = base_convert($i['2'], 36, 10); 
		$logo_color = base_convert($i['3'], 36, 10);

		return '<center><param name="movie" value="'.asset('flash/guild/DofusGuildes.swf').'" />
						<param name="play" value="true" />
						<param name="flashvars" value="bcgSrc='.$bg_src.'&bcgColor='.$bg_color.'&frtSrc='.$logo_src.'&frtColor='.$logo_color.'" />
						<param name="loop" value="true" />
						<param name="quality" value="high" />
						<param name="wmode" value="transparent" />
						<!--[if !IE]>-->
					<object id="logo_guilde_container" type="application/x-shockwave-flash" data="'.asset('flash/guild/DofusGuildes.swf').'".swf" width="'.$width.'" height="'.$width.'">
						<param name="play" value="true" />
						<param name="flashvars" value="bcgSrc='.$bg_src.'&bcgColor='.$bg_color.'&frtSrc='.$logo_src.'&frtColor='.$logo_color.'" />						
						<param name="loop" value="true" />
						<param name="quality" value="high" />
						<param name="wmode" value="transparent" />
						<!--<![endif]-->
						<a href="http://www.adobe.com/go/getflashplayer">
						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
						</a>
						<!--[if !IE]>-->
					</object>
					<!--<![endif]-->
					</object></center>';
	}
}