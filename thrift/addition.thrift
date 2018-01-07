namespace java com.blog.thrift.service
namespace php common.thrift.gen.service

typedef i32 int 

service AdditionService
{
	int add(1:int n1, 2:int n2),
}