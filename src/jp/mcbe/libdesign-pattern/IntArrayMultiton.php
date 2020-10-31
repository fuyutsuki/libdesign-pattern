<?php

declare(strict_types=1);

namespace jp\mcbe\libdesign_pattern;

/**
 * Trait IntArrayMultiton
 * @package jp\mcbe\libdesign_pattern
 */
trait IntArrayMultiton {

	/** @var self[] */
	protected static array $instances = [];

	final public function __construct(int $key) {
		self::$instances[$key] = $this;
	}

	final public static function getInstance(int $key): ?self {
		return self::$instances[$key] ?? null;
	}

}