                Elements startDates = doc2.select("time");
                for(Element starthold : startDates){
                    if(starthold.attr("itemprop").equals("startDate")){
                        String sdtemp = starthold.attr("datetime");
                        course1.setStartDate(sdtemp);
                    }
                }
