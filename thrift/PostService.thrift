include 'Post.thrift'
include 'Query.thrift'
include 'CUDResult.thrift'
include 'Tag.thrift'

namespace java com.blog.thrift.service
namespace php common.thrift.gen.service

service PostService {
    list<Post.Post> find(1:Query.Query query),
    CUDResult.CUDResult create(1:Post.Post post),
    CUDResult.CUDResult createWithTags(1:Post.Post post, 2: list<Tag.Tag> tagList),
    CUDResult.CUDResult update(1:Post.Post post),
    CUDResult.CUDResult updateWithTags(1:Post.Post post, 2: list<Tag.Tag> tagList),
    CUDResult.CUDResult deleteById(1:int id),
}