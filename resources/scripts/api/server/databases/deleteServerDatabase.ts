import http from '@/api/http';

export default (uuid: string, database: string): Promise<void> => {
    return new Promise((resolve, reject) => {
        http.delete(`/api/client/services/${uuid}/databases/${database}`)
            .then(() => resolve())
            .catch(reject);
    });
};
