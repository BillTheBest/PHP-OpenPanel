<?php

/** 
 * Copyright (c) 2012 <copyright Aruba spa>
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software 
 * and associated documentation files (the "Software"), to deal in the Software without restriction, 
 * including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, 
 * and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, 
 * subject to the following conditions:
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES 
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. 
 * IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, 
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS 
 * IN THE SOFTWARE.
 * 
 */

class NewTemplateBound
{

  /**
   * 
   * @var int $DefaultValue
   * @access public
   */
  public $DefaultValue;

  /**
   * 
   * @var int $MaxValue
   * @access public
   */
  public $MaxValue;

  /**
   * 
   * @var int $MinValue
   * @access public
   */
  public $MinValue;

  /**
   * 
   * @var ResourceTypes $ResourceType
   * @access public
   */
  public $ResourceType;

  /**
   * 
   * @param int $DefaultValue
   * @param int $MaxValue
   * @param int $MinValue
   * @param ResourceTypes $ResourceType
   * @access public
   */
  public function __construct($DefaultValue, $MaxValue, $MinValue, $ResourceType)
  {
    $this->DefaultValue = $DefaultValue;
    $this->MaxValue = $MaxValue;
    $this->MinValue = $MinValue;
    $this->ResourceType = $ResourceType;
  }

}
