package ornek2

// Bu olaya association(referans-ve-birliktelik)

type AutoMobile struct {
	driver *Person
}
type Person struct {
	car *AutoMobile
}

func main() {
	p := &Person{}
	c := &AutoMobile{}
	p.car = c
	c.driver = p
}
