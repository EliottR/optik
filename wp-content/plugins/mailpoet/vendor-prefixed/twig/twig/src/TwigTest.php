<?php
namespace MailPoetVendor\Twig;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Twig\Node\Expression\TestExpression;
class TwigTest
{
 private $name;
 private $callable;
 private $options;
 private $arguments = [];
 public function __construct(string $name, $callable = null, array $options = [])
 {
 if (__CLASS__ !== static::class) {
 @\trigger_error('Overriding ' . __CLASS__ . ' is deprecated since Twig 2.4.0 and the class will be final in 3.0.', \E_USER_DEPRECATED);
 }
 $this->name = $name;
 $this->callable = $callable;
 $this->options = \array_merge(['is_variadic' => \false, 'node_class' => TestExpression::class, 'deprecated' => \false, 'alternative' => null, 'one_mandatory_argument' => \false], $options);
 }
 public function getName()
 {
 return $this->name;
 }
 public function getCallable()
 {
 return $this->callable;
 }
 public function getNodeClass()
 {
 return $this->options['node_class'];
 }
 public function setArguments($arguments)
 {
 $this->arguments = $arguments;
 }
 public function getArguments()
 {
 return $this->arguments;
 }
 public function isVariadic()
 {
 return $this->options['is_variadic'];
 }
 public function isDeprecated()
 {
 return (bool) $this->options['deprecated'];
 }
 public function getDeprecatedVersion()
 {
 return $this->options['deprecated'];
 }
 public function getAlternative()
 {
 return $this->options['alternative'];
 }
 public function hasOneMandatoryArgument() : bool
 {
 return (bool) $this->options['one_mandatory_argument'];
 }
}
// For Twig 1.x compatibility
\class_alias('MailPoetVendor\\Twig\\TwigTest', 'MailPoetVendor\\Twig_SimpleTest', \false);
\class_alias('MailPoetVendor\\Twig\\TwigTest', 'MailPoetVendor\\Twig_Test');
