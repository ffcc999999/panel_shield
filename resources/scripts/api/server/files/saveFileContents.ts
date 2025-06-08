import http from '@/api/http';

export default async (uuid: string, file: string, content: string): Promise<void> => {
    await http.post(`/api/client/services/${uuid}/files/write`, content, {
        params: { file },
        headers: {
            'Content-Type': 'text/plain',
        },
    });
};
