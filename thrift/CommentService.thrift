include 'Comment.thrift'
include 'CUDResult.thrift'
include 'Query.thrift'

namespace java com.blog.thrift.service
namespace php common.thrift.gen.service

service CommentService {
    list<Comment.Comment> find(1: Query.Query query),
    CUDResult.CUDResult create(1: Comment.Comment comment),
    CUDResult.CUDResult update(1: Comment.Comment comment),
    CUDResult.CUDResult deleteById(1: int id),
}