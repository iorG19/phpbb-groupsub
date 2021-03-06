<?php
/**
 *
 * Group Subscription. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Steve Guidetti, https://github.com/stevotvr
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace stevotvr\groupsub\operator;

use stevotvr\groupsub\exception\unexpected_value;

/**
 * Group Subscription unit helper operator.
 */
class unit_helper extends operator implements unit_helper_interface
{
	public function get_formatted_timespan($days)
	{
		extract($this->get_timespan_parts($days));
		return $length . ' ' . $this->language->lang('GROUPSUB_' . strtoupper($unit), $length);
	}

	public function get_timespan_parts($days)
	{
		$unit = 'days';
		$length = $days;
		if ($length % self::YEAR === 0)
		{
			$unit = 'years';
			$length /= self::YEAR;
		}
		else if ($length % self::MONTH === 0)
		{
			$unit = 'months';
			$length /= self::MONTH;
		}
		else if ($length % self::WEEK === 0)
		{
			$unit = 'weeks';
			$length /= self::WEEK;
		}

		return array(
			'length'	=> $length,
			'unit'		=> $unit,
		);
	}

	public function get_days($length, $unit)
	{
		switch ($unit)
		{
			case 'days':
				return $length;
			case 'weeks':
				return $length * self::WEEK;
			case 'months':
				return $length * self::MONTH;
			case 'years':
				return $length * self::YEAR;
		}

		throw new unexpected_value('unit');
	}
}
