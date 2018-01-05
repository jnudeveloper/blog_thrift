include 'Condition.thrift'

namespace java com.blog.thrift.domain
namespace php common.thrift.gen.domain

struct Query {
    1: bool distinct,
    2: list<string> fromTable,
    3: list<string> groupBy,
    4: list<string> having,
    5: list<string> join,
    6: int limit,
    7: int offset,
    8: list<string> on,
    9: list<string> orderBy,
    10: list<string> select,
    11: list<string> unions,
    12: list<Condition.Condition> where,
    13: list<string> params,
}