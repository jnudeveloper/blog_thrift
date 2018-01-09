include 'Condition.thrift'

namespace java com.blog.thrift.domain
namespace php thriftgen.domain

struct Query {
    1: string where,
    2: i32 limit,
    3: i32 offset,
    4: map<string, string> orderBy,
    5: list<string> select,
    6: string selectOption,
    7: bool distinct,
    8: list<string> from,
    9: list<string> groupBy,
    10: string join,
    11: string having,
    12: string union,
    13: map<string, string> params,
}