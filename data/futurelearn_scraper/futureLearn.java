import org.jsoup.Jsoup;
import org.jsoup.nodes.Document;
import org.jsoup.select.Elements;
import org.jsoup.nodes.Element;
import java.sql.*;
import java.io.IOException;
import java.util.ArrayList;
import java.util.HashSet;
import java.util.Set;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.Statement;
import java.sql.ResultSet;
import java.time.LocalDate;
import java.time.LocalDateTime;
import java.time.LocalTime;

public class futureLearn {
	private static int myId = 1000;
	
	/**
	 * @param args
	 * @throws IOException 
	 * @throws ClassNotFoundException 
	 * @throws IllegalAccessException 
	 * @throws InstantiationException 
	 * @throws SQLException 
	 */
	public static void main(String[] args) throws IOException, InstantiationException, IllegalAccessException, ClassNotFoundException, SQLException {
        ArrayList<String> pgcrs = new ArrayList<String>(); //Array which will store each course URLs 
        pgcrs.add("https://www.futurelearn.com/courses/categories/business-and-management"); //0 - Business and Management
        pgcrs.add("https://www.futurelearn.com/courses/categories/creative-arts-and-media"); //1 - Creative Arts and Media
        pgcrs.add("https://www.futurelearn.com/courses/categories/health-and-psychology"); //2 - Health and Psychology
        pgcrs.add("https://www.futurelearn.com/courses/categories/history"); //3 - History
        pgcrs.add("https://www.futurelearn.com/courses/categories/languages-and-cultures"); //4 - Languages and Cultures
        pgcrs.add("https://www.futurelearn.com/courses/categories/law"); //5 - Law
        pgcrs.add("https://www.futurelearn.com/courses/categories/literature"); //6 - Literature
        pgcrs.add("https://www.futurelearn.com/courses/categories/nature-and-environment"); //7 - Nature and Environment
        pgcrs.add("https://www.futurelearn.com/courses/categories/online-and-digital"); //8 - Online and Digital
        pgcrs.add("https://www.futurelearn.com/courses/categories/politics-and-the-modern-world"); //9 - Politics and the Modern World
        pgcrs.add("https://www.futurelearn.com/courses/categories/science-maths-and-technology"); //10 - Science Maths and Technology
        pgcrs.add("https://www.futurelearn.com/courses/categories/sport-and-leisure"); //11 - Sport and Leisure
        pgcrs.add("https://www.futurelearn.com/courses/categories/teaching-and-studying"); //12 - Teaching and Studying
        
        ArrayList<String> pgcrsNames = new ArrayList<String>();
        pgcrsNames.add("Business and Management");
        pgcrsNames.add("Creative Arts and Media" );
        pgcrsNames.add("Health and Psychology" );
        pgcrsNames.add("History" );
        pgcrsNames.add("Languages and Cultures" );
        pgcrsNames.add("Law" );
        pgcrsNames.add("Literature" );
        pgcrsNames.add("Nature and Environment" );
        pgcrsNames.add("Online and Digital" );
        pgcrsNames.add("Politics and the Modern World" );
        pgcrsNames.add("Science Maths and Technology");
        pgcrsNames.add("Sport and Leisure" );
        pgcrsNames.add("Teaching and Studying" );

        ArrayList<Course> allCourses = new ArrayList<Course>();
        
        Set<String> courseLinks = new HashSet<String>();
        int i = 10000; //for course id 
        for(int a=0; a<pgcrs.size();a++)
        {                   
            //String furl = (String) pgcrs.get(a);
            //Document doc = Jsoup.connect(furl).get();
            Document doc = Jsoup.connect(pgcrs.get(a)).get();
        	Elements ele = doc.select("a[href]");//get all the a tags
            for(Element ax: ele){
                String link = ax.attr("href");
                if(link.length() > 9){
                    if(link.substring(0, 9).equals("/courses/")){
                        courseLinks.add(link);
                    }
                }

            }
        
            for(String l : courseLinks){ //go to each course
               Course course1 = new Course(i);//create the course. we will add it at the end
               
               //course URL
               String crsurl = "https://www.futurelearn.com" + l;                
               course1.setUrl(crsurl);
               Document doc2 = Jsoup.connect(crsurl).get();
               Elements ele2 = doc2.select("div[class]");
               
               //course teacher
               for(Element ay: ele2){
                   if(ay.attr("class").equals("educator")){
                       Elements ele3 = ay.select("img");
                       String proName = ele3.attr("alt");
                       proName = proName.replaceAll("\\(.+?\\)", "");
                       proName = proName.replaceAll("\\[.+?\\]", "");
                       proName = proName.replaceAll("Dr|Professor|Associate", "").trim();
                       proName = proName.replaceAll("&", ",");
                       proName = proName.replaceAll(" and ", ",");
                       proName = proName.replaceAll("\\s+,",",");
                       proName = proName.replaceAll(",\\s+",",");
                       proName = proName.replaceAll("\\s+", " ").trim();
                       //System.out.println(proName);
                       course1.addInstructorName(proName);//save the teacher's name
                       course1.addInstructorImage(ele3.attr("src"));//save the teacher's picture
                       break;
                   }
               }
               
               //course name
               String crsName = doc2.select("h1").text().trim();
               course1.setCourseName(crsName);//save the course name
               
               //shortDesc
               Elements shortDesc = doc2.select("meta[content]");
               for(Element sdhold : shortDesc){
                   if(sdhold.attr("itemprop").equals("description")){
                       String sdtemp = sdhold.attr("content");
                       course1.setShortDesc(sdtemp);
                   }
               }

               
               //longDesc
               String longdescription = doc2.select("section[class=small]").text();
               course1.setLongDescription(longdescription);
               
               //University
               String university = doc2.select(".run-organisation__logo").attr("alt");
               university = university.replace("logo", "").trim();
               course1.setUniversity(university);
               
               //video link
               String videoLink = doc2.select("source[src]").attr("src");
               if(videoLink.startsWith("//")){
            	   course1.setVideoLink(videoLink);
               }
               else{
            	   course1.setVideoLink("");
               }
               
               //certificate
               String certificates = doc2.select("p[class=run-data]").text();
               if(certificates.contains("Certificates")){
                   course1.setCertificate("Yes");
               }
               else{
                   course1.setCertificate("No");
               }
               
               
               //course length
               String duration = doc2.select("time[itemprop=duration]").text();
               String durationSplit[] = duration.split(" "); //split on space
               if(!durationSplit[0].equals("")){
               		int durationNum = Integer.parseInt(durationSplit[0]);//get the first duration in weeks and make it an int
               		duration = Integer.toString(durationNum);//go from in to string
            	}
               if(duration.length() > 0){
            	   course1.addCourseLength(duration); //save the duration of the course
               } else {
            	   course1.addCourseLength("0");
               }
               
               
               //startdate
                Elements startDates = doc2.select("time");
                for(Element starthold : startDates){
                    if(starthold.attr("itemprop").equals("startDate")){
                        String sdtemp = starthold.attr("datetime");
                        course1.setStartDate(sdtemp);
                    }
                }
               
              //course image
              Elements ele4 = doc2.select("meta");
              
              for(Element ay: ele4){
                if(ay.attr("content").contains("https://ugc")){
               	String crsImgLink = ay.attr("content");
               	course1.addCourseImage(crsImgLink);
                }       
              }        
              
               //course category is determined by the current index of the course page
               course1.setCategory(pgcrsNames.get(a));//get the corresponding name for the category

               //time scraped
               course1.setTimeScraped(LocalDate.now().toString()+" "+LocalTime.now().toString());
               
               
               //duplicatecheck
               boolean duplicate = false;
               for(Course crscheck: allCourses){
                   //System.out.println(crscheck.getCourseName());
                   if(crscheck.getCourseName().equals(crsName)){
                       duplicate = true;
                   }
               }     
               if(!duplicate){
            	   //System.out.println(course1.toString());
                   allCourses.add(course1);
                   i++;
                   myId++;
                   //store each course to database
                   storeToMySQL(course1);
               }
               else{
            	   duplicate = false;
               }
            }
            }
        System.out.println("dONE!");
	}
	
	private static void storeToMySQL(Course crs){
		try{
			//connection to MySQL
			Connection conn = DriverManager.getConnection("jdbc:mysql://localhost/cs160","root","");
			String query1 = "INSERT INTO coursedetails (id, profname, profimage, course_id)" +
					" VALUES (\"" + myId + "\", \"" + crs.getInstructorNames() + "\", \"" + crs.getInstructorImages() + "\", \"" + crs.getCourseId() + "\")";
			
			String query2 = "INSERT INTO course_data (id, title,short_desc,long_desc, course_link, video_link, start_date, course_length, course_image, category, site, course_fee, language, certificate, university, time_scraped)" +
					" VALUES (\"" + crs.getCourseId() + "\", \"" + crs.getCourseName() + "\", \"" + crs.getShortDesc() + "\", \"" + crs.getLongDescription() + "\", \"" 
					+ crs.getUrl() + "\", \"" + crs.getVideoLink() + "\", \"" + crs.getStartDates() + "\", \"" + crs.getCourseLength() + "\", \"" + crs.getCourseImages() + "\", \""
					+ crs.getCategory() + "\", \"" + crs.site + "\", \"" + crs.getCourse_fee() + "\", \"" + crs.getLanguage() + "\", \"" + crs.getCertificate() + "\", \"" 
					+ crs.getUniversity() + "\", \"" + crs.getTimeScraped() + "\")";	
			Statement stat = conn.createStatement();
			stat.executeUpdate(query2);
			stat.executeUpdate(query1);
			
		} catch(Exception e) {
			System.out.println(e);
			System.out.println(crs.getInstructorNames());
		}
	}
}
