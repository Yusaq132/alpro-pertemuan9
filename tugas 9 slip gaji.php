class Karyawan{
    double total, gajiTetap, lemburPerHari,bonusDistributor;
    void gajinya(){
        System.out.println("Gaji pegawai Bulan ini");
    }
}

class Produksi extends Karyawan{
    void gajinya(int jumlahHariLembur){
        gajiTetap = 5000000;
        lemburPerHari = 2000000;
        total =  gajiTetap + (lemburPerHari + jumlahHariLembur);
        System.out.println("Gaji pegawai Produksi "+total);
    }
}

class Distributor extends Karyawan{
    void gajinya(int jumlahToko){
        gajiTetap = 5000000;
        lemburPerHari = 30000 * jumlahToko;
        total =  gajiTetap + bonusDistributor;
        System.out.println("Gaji pegawai Distributor "+total);
    }
}

public class Utama {
    public static void main(String []args){
        Produksi prd = new Produksi();
        Distributor dst = new Distributor();
        prd.gajinya(20);
        dst.gajinya(300);
    }
}