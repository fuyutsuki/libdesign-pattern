<?php

declare(strict_types=1);

namespace jp\mcbe\libdesign\pattern;

use SplFixedArray;

/**
 * Trait SplFixedArrayMultiton
 * @package jp\mcbe\libdesign\pattern
 */
trait SplFixedArrayMultiton {

	protected static SplFixedArray $instances;

	final public static function init(int $size) {
		static::$instances = new SplFixedArray($size);
	}

	final public function __construct(int $key) {
		static::$instances[$key] = $this;
	}

	/**
	 * @param int $key
	 * @return static|null
	 */
	final public static function getInstance(int $key): ?self {
		return static::$instances[$key];
	}

	final public static function removeInstance(int $key) {
		unset(static::$instances[$key]);
	}

}