<?php 
				$tl="";$theloai="";
					if($row["matl"]=="action")	{$tl="action";$theloai="phim hành động";}
					if($row["matl"]=="phimle")	{$tl="phimle";$theloai="phim lẻ";}
					if($row["matl"]=="romance")	{$tl="romance";$theloai="phim tình cảm lãng mạng";}
					if($row["matl"]=="comedy")	{$tl="comedy";$theloai="phim hài hước";}
					if($row["matl"]=="horror")	{$tl="horror";$theloai="phim kinh dị";}
					
				$l="";$loai="";
					if($row["maloai"]=="phimle")	{$l="phimle";$loai="phim lẻ";}
					if($row["maloai"]=="phimbo")	{$l="phimbo";$loai="phim bộ";}
					
			?>