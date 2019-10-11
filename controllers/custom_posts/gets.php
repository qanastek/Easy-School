<?php

function GetCurrency()
{
	$currency = esc_attr( get_option('default_price') );

	if ($currency)
	{
		return $currency;
	}
	else
	{
		return "€";
	}
}

function GetPrice()
{
	$price = get_post_meta( get_the_ID(), "price" )[0];

	if ($price)
	{
		if ($price == 0)
		{
			echo "Gratuit";
		}
		else
		{
			echo $price.' '.GetCurrency();
		}
	}
	else
	{
		echo "Gratuit";
	}
}