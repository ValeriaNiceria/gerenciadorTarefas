<?php

function data_exibir($data)
{
	if ($data == "" || $data == "0000-00-00")
	{
		return "";
	}

	$parte = explode("-", $data);

	$exibir = "{$parte[2]}/{$parte[1]}/{$parte[0]}";

	return $exibir;	
}