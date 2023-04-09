package main

func main() {
	f := Firma{}
	f.FirmaEkle("Adres", "Firma")
	id := 1
	bulunanFirma := f.Bul(id)
	_ = bulunanFirma
}
