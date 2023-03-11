import java.util.ArrayList;
import java.util.Map;

public class UberBlack extends Car {
    Map<String, Map<String,Integer>> typeCarAccepted;
    ArrayList<String> seatsMaterial;

    public UberBlack (String license, Account driver, 
    Map<String, Map<String,Integer>> typeCarAccepted,
    ArrayList<String> seatMaterial){
        super(license, driver);
        this.typeCarAccepted = typeCarAccepted;
        this.seatsMaterial = seatsMaterial;
    }
}
