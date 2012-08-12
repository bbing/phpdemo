def filter(f):
    def fuck():
        print "eee"
        f()
    return fuck

@filter
def func1():
    print "ok"
func1()
