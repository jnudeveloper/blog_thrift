include 'Comment.thrift'
include 'CUDResult.thrift'
include 'Query.thrift'

namespace java com.jnudeveloper.blog.thriftgen.service
namespace php thriftgen.service

service CommentService {
    list<Comment.TComment> find(1: Query.TQuery query),
    CUDResult.TCUDResult create(1: Comment.TComment comment),
    CUDResult.TCUDResult update(1: Comment.TComment comment),
    CUDResult.TCUDResult deleteById(1: i32 id),
}