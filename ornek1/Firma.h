class Firma{
public:
    Firma();
    virtual ~Firma();
    char* firma;
    char* adres;

    void FirmaEkle(char* Adres,char* Firma);
    Firma Bul(int id);
private:
    int Firma_ID;    
};
