include 'Tag.thrift'
include 'Query.thrift'
include 'CUDResult.thrift'

namespace java com.jnudeveloper.blog.thriftgen.service
namespace php thriftgen.service

service TagService {
    list<Tag.TTag> find(1: Query.TQuery query),
    CUDResult.TCUDResult create(1: Tag.TTag tag),
    CUDResult.TCUDResult update(1: Tag.TTag tag),
    CUDResult.TCUDResult deleteById(1: i32 id),
}