package main

import "fmt"

type Firma struct {
	firma    string
	adres    string
	Firma_Id int
}

func (f *Firma) FirmaEkle(adres string, firma string) {
	fmt.Println(adres, firma)
}
func (f *Firma) Bul(id int) Firma {
	var bulunanFirma Firma
	return bulunanFirma
}
