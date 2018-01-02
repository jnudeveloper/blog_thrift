<?php
namespace common\thrift\gen\domain;

/**
 * Autogenerated by Thrift Compiler (0.11.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


class Comment {
  static $isValidate = false;

  static $_TSPEC = array(
    1 => array(
      'var' => 'id',
      'isRequired' => false,
      'type' => TType::I32,
      ),
    2 => array(
      'var' => 'post_id',
      'isRequired' => false,
      'type' => TType::I32,
      ),
    3 => array(
      'var' => 'parent_id',
      'isRequired' => false,
      'type' => TType::I32,
      ),
    4 => array(
      'var' => 'status',
      'isRequired' => false,
      'type' => TType::BYTE,
      ),
    5 => array(
      'var' => 'content',
      'isRequired' => false,
      'type' => TType::STRING,
      ),
    6 => array(
      'var' => 'create_time',
      'isRequired' => false,
      'type' => TType::I32,
      ),
    7 => array(
      'var' => 'update_time',
      'isRequired' => false,
      'type' => TType::I32,
      ),
    8 => array(
      'var' => 'author_id',
      'isRequired' => false,
      'type' => TType::I32,
      ),
    9 => array(
      'var' => 'approve_num',
      'isRequired' => false,
      'type' => TType::I32,
      ),
    );

  /**
   * @var int
   */
  public $id = null;
  /**
   * @var int
   */
  public $post_id = null;
  /**
   * @var int
   */
  public $parent_id = null;
  /**
   * @var int
   */
  public $status = null;
  /**
   * @var string
   */
  public $content = null;
  /**
   * @var int
   */
  public $create_time = null;
  /**
   * @var int
   */
  public $update_time = null;
  /**
   * @var int
   */
  public $author_id = null;
  /**
   * @var int
   */
  public $approve_num = null;

  public function __construct($vals=null) {
    if (is_array($vals)) {
      if (isset($vals['id'])) {
        $this->id = $vals['id'];
      }
      if (isset($vals['post_id'])) {
        $this->post_id = $vals['post_id'];
      }
      if (isset($vals['parent_id'])) {
        $this->parent_id = $vals['parent_id'];
      }
      if (isset($vals['status'])) {
        $this->status = $vals['status'];
      }
      if (isset($vals['content'])) {
        $this->content = $vals['content'];
      }
      if (isset($vals['create_time'])) {
        $this->create_time = $vals['create_time'];
      }
      if (isset($vals['update_time'])) {
        $this->update_time = $vals['update_time'];
      }
      if (isset($vals['author_id'])) {
        $this->author_id = $vals['author_id'];
      }
      if (isset($vals['approve_num'])) {
        $this->approve_num = $vals['approve_num'];
      }
    }
  }

  public function getName() {
    return 'Comment';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->id);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->post_id);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->parent_id);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::BYTE) {
            $xfer += $input->readByte($this->status);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->content);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->create_time);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->update_time);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 8:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->author_id);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 9:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->approve_num);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('Comment');
    if ($this->id !== null) {
      $xfer += $output->writeFieldBegin('id', TType::I32, 1);
      $xfer += $output->writeI32($this->id);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->post_id !== null) {
      $xfer += $output->writeFieldBegin('post_id', TType::I32, 2);
      $xfer += $output->writeI32($this->post_id);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->parent_id !== null) {
      $xfer += $output->writeFieldBegin('parent_id', TType::I32, 3);
      $xfer += $output->writeI32($this->parent_id);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->status !== null) {
      $xfer += $output->writeFieldBegin('status', TType::BYTE, 4);
      $xfer += $output->writeByte($this->status);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->content !== null) {
      $xfer += $output->writeFieldBegin('content', TType::STRING, 5);
      $xfer += $output->writeString($this->content);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->create_time !== null) {
      $xfer += $output->writeFieldBegin('create_time', TType::I32, 6);
      $xfer += $output->writeI32($this->create_time);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->update_time !== null) {
      $xfer += $output->writeFieldBegin('update_time', TType::I32, 7);
      $xfer += $output->writeI32($this->update_time);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->author_id !== null) {
      $xfer += $output->writeFieldBegin('author_id', TType::I32, 8);
      $xfer += $output->writeI32($this->author_id);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->approve_num !== null) {
      $xfer += $output->writeFieldBegin('approve_num', TType::I32, 9);
      $xfer += $output->writeI32($this->approve_num);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

