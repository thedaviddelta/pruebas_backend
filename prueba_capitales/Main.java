import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.io.OutputStreamWriter;
import java.net.HttpURLConnection;
import java.net.URL;

/**
 * main
 */
public class Main {
    public static void main(String[] args) {
        if (args.length <= 0) {
            System.out.println("Introduce un parámetro de filtado");
            return;
        }
        
        try {
            URL url = new URL("http://thedaviddelta.tk/pruebas_backend/capitales.php");
            HttpURLConnection con = (HttpURLConnection)url.openConnection();

            con.setRequestMethod("POST");
            con.addRequestProperty("Content-Type", "application/x-www-form-urlencoded");

            con.setDoOutput(true);
            OutputStreamWriter out = new OutputStreamWriter(con.getOutputStream(), "utf-8");
			out.write("sort=".concat(args[0]));
			out.close();

            BufferedReader in = new BufferedReader(new InputStreamReader(con.getInputStream(), "utf-8"));
            String[] caps = in.readLine().replaceAll("\"|\\[|\\]", "").split(",");
            in.close();

            for (String s : caps) {
                System.out.println(s);
            }
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}