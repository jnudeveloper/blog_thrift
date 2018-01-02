<?php
namespace common\thrift\gen\service;
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


interface TagServiceIf {
  /**
   * @param \common\thrift\gen\domain\Query $query
   * @return \common\thrift\gen\domain\Tag[]
   */
  public function find(\common\thrift\gen\domain\Query $query);
  /**
   * @param \common\thrift\gen\domain\Tag $tag
   * @return \common\thrift\gen\domain\CUDResult
   */
  public function create(\common\thrift\gen\domain\Tag $tag);
  /**
   * @param \common\thrift\gen\domain\Tag $tag
   * @return \common\thrift\gen\domain\CUDResult
   */
  public function update(\common\thrift\gen\domain\Tag $tag);
  /**
   * @param int $id
   * @return \common\thrift\gen\domain\CUDResult
   */
  public function deleteById($id);
}

