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
		self::$instances = new SplFixedArray($size);
	}

	final public function __construct(int $key) {
		self::$instances[$key] = $this;
	}

	final public static function getInstance(int $key): ?self {
		return self::$instances[$key];
	}

}