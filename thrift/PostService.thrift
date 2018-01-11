include 'Post.thrift'
include 'Query.thrift'
include 'CUDResult.thrift'
include 'Tag.thrift'

namespace java com.blog.thrift.service
namespace php thriftgen.service

service PostService {
    list<Post.TPost> find(1:Query.TQuery query),
    CUDResult.TCUDResult create(1:Post.TPost post),
    CUDResult.TCUDResult createWithTags(1:Post.TPost post, 2: list<Tag.TTag> tagList),
    CUDResult.TCUDResult update(1:Post.TPost post),
    CUDResult.TCUDResult updateWithTags(1:Post.TPost post, 2: list<Tag.TTag> tagList),
    CUDResult.TCUDResult deleteById(1:i32 id),
}