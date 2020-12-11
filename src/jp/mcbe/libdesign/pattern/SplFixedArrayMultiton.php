<?php

declare(strict_types=1);

namespace jp\mcbe\libdesign\pattern;

use SplFixedArray;

/**
 * Trait SplFixedArrayMultiton
 * @package jp\mcbe\libdesign\pattern
 */
trait SplFixedArrayMultiton {

	protected static $instances;

	final public static function init(int $size) {
		self::$instances = new SplFixedArray($size);
	}

	final public function __construct(int $key) {
		self::$instances[$key] = $this;
	}

	/**
	 * @param int $key
	 * @return static|null
	 */
	final public static function getInstance(int $key): ?self {
		return self::$instances[$key];
	}

	final public static function removeInstance(int $key) {
		unset(self::$instances[$key]);
	}

}