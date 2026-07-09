<?php

class WPAM_MoneyHelper {

	public static function getDollarSign() {
            $currency_symbol = get_option(WPAM_PluginConfig::$AffCurrencySymbol);
            if(empty($currency_symbol)){
               $currency_symbol = '$';
            }
            return $currency_symbol;
	}

	public static function getCurrencyCode() {
            $currency_code = get_option(WPAM_PluginConfig::$AffCurrencyCode);
            if(empty($currency_code)){
               $currency_code = 'USD';
            }
            return $currency_code;
	}
}